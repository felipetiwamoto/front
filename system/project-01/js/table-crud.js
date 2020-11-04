'use strict';

const TableCrud = function (data, options = {}) {
    this.data = data;

    this.options = {
        tableName: options.tableName ? options.tableName : "",
        table: `[data-crud-table="${options.tableName}"]`,
        attributes: options.attributes,
        list: options.list,
        hasCreate: true,
        hasEdit: true,
        hasRemove: true,
        filters: options.filters != undefined ? options.filters : {}
    };

    this.options.list.forEach((key) => {
        if(this.options.filters[key] == undefined){
            this.options.filters[key] = (value, key) => (value);
        }
    })

    this.renderThead = () => {
        let thead = document.querySelector(`${this.options.table} thead`);

        let html = `<tr>`;
        html += `<th></th>`;
        html += (this.options.hasCreate || this.options.hasEdit || this.options.hasRemove) ? `<th>Ações</th>` : ``;
        this.options.list.forEach((column) => {
            html += `<th>${this.options.attributes[column]}</th>`;
        });
        html += `</tr>`;
        thead.innerHTML = html;
    }

    this.renderTbody = () => {
        let tbody = document.querySelector(`${this.options.table} tbody`);

        let html = ``;
        this.data.forEach((item, index) => {
            html += `<tr data-key="${item.id}">`;

            html += `<td></td>`;

            if (this.options.hasCreate || this.options.hasEdit || this.options.hasRemove) {
                html += `<td data-action>`;
                html += this.options.hasEdit ? `<button type="button" class="button primary small" data-edit="${item.id}">editar</button>` : ``;
                html += this.options.hasRemove ? `<button type="button" class="button primary small" data-remove="${item.id}">remover</button>` : ``;
                html += `</td>`;
            }

            this.options.list.forEach((column) => {
                html += `<td>${this.options.filters[column](item[column], column)}</td>`;
            })
            html += `</tr>`;
        })
        tbody.innerHTML = html;
    }

    this.renderTfoot = () => {
        let tfoot = document.querySelector(`${this.options.table} tfoot`);

        let html = `<tr>`;
        html += `<th></th>`;
        html += (this.options.hasCreate || this.options.hasEdit || this.options.hasRemove) ? `<th>Ações</th>` : ``;
        this.options.list.forEach((column) => {
            html += `<th>${this.options.attributes[column]}</th>`;
        });
        html += `</tr>`;
        tfoot.innerHTML = html;
    }

    this.initCreate = () => {
        document.querySelector(`[data-create="${this.options.tableName}"]`)
            .addEventListener(`click`, (e) => {
                this.prepareCreate(e.target.dataset.create);
            })
    }

    this.initEdit = () => {
        document.querySelectorAll(`[data-edit]`).forEach((item) => {
            item.addEventListener(`click`, () => {
                this.prepareEdit(item.dataset.edit);
            })
        })
    }

    this.initRemove = () => {
        document.querySelectorAll(`[data-remove]`).forEach((item) => {
            item.addEventListener(`click`, () => {
                this.remove(item.dataset.remove);
            })
        })
    }

    this.prepareCreate = (index) => {
        let tbody = document.querySelector(`${this.options.table} tbody`);

        let html = `<tr data-key="${index}">`;
        html += `<td></td>`;
        html += (this.options.hasCreate) ? `<td><button class="button primary small" data-create-action="${index}">salvar</button></td>` : ``;
        this.options.list.forEach((column) => {
            html += `<td><div class="field-group tiny"><input class="field" type="text" id="${this.options.tableName}[${column}]" /></div></td>`;
        })
        html += `</tr>`;

        tbody.innerHTML = html + tbody.innerHTML;

        document.querySelector(`[data-create-action="${this.options.tableName}"]`)
            .addEventListener(`click`, (e) => {
                this.create(this.options.tableName, e.target.dataset.createAction);
            })
    }

    this.beforeCreate = (data, fields) => ({ status: "success" });
    this.afterCreate = (data, fields) => (true);
    this.createFails = (data, fields) => (true);

    this.create = async (tableName, index) => {
        let fields = document.querySelectorAll(`${this.options.table} tbody tr[data-key="${index}"] input`);
        let data = {};
        
        fields.forEach((item) => {
            let key = item.id.replace(this.options.tableName, "").substring(1).slice(0, -1);
            data[key] = item.value;
        })
        
        let res = await this.beforeCreate(data, fields);

        if (res.status === "success") {
            this.data = [res.data, ...this.data];
            this.renderTbody();
            this.afterCreate(data, fields)
        }else{
            this.createFails(data, fields);
        }
    }

    this.prepareEdit = (index) => {
        let columns = document.querySelectorAll(`${this.options.table} tbody tr[data-key="${index}"] [data-name]`);

        columns.forEach((item) => {
            let value = item.textContent;
            item.innerHTML = `<div class="field-group tiny"><input type="text" class="field" id="${this.options.tableName}[${item.dataset.name}]" value="${value}"></div>`;
        });

        let action = document.querySelector(`${this.options.table} tbody tr[data-key="${index}"] [data-action]`);
        action.innerHTML = `<td><button class="button primary small" data-edit-action="${index}">salvar</button>`;

        document.querySelectorAll(`[data-edit-action]`).forEach((item) => {
            item.addEventListener(`click`, () => {
                this.edit(this.options.tableName, item.dataset.editAction);
            })
        })
    }

    this.beforeEdit = (data, fields) => ({ status: "success" });
    this.afterEdit = (data, fields) => (true);
    this.editFails = (data, fields) => (true);
    
    this.edit = (tableName, index) => {
        let fields = document.querySelectorAll(`${this.options.table} tbody tr[data-key="${index}"] td input`);
        let data = {};

        fields.forEach((item) => {
            let key = item.id.replace(this.options.tableName, "").substring(1).slice(0, -1);
            data[key] = item.value;
        })

        // document.querySelector(`${this.options.table} tbody tr[data-key="${index}"]`).remove();

        let res = this.beforeEdit(data, fields);
        if(res.status === "success"){
            this.data = this.data.map((item) => {
                return (item.id == index) ? res.data : item;
            })
            this.init();
            this.afterEdit(data, fields);
        }else{
            this.editFails(data, fields);
        }
    }

    this.beforeRemove = (id) => ({ status: "success" });
    this.afterRemove = (id) => (true);
    this.removeFails = (data, fields) => (true);

    this.remove = (id) => {
        let itemToBeRemoved = this.data.find((item) => (item.id == id));
        if (this.beforeRemove(itemToBeRemoved).status === "success") {
            this.data = this.data.filter((item) => (itemToBeRemoved.id != item.id));
            this.init();
            this.afterRemove(itemToBeRemoved);
        }else{
            this.removeFails(itemToBeRemoved);
        }
    }

    this.init = () => {
        this.renderThead();
        this.renderTbody();
        this.renderTfoot();

        this.initCreate();
        this.initEdit();
        this.initRemove();
    }

    this.init();

    return this;
}