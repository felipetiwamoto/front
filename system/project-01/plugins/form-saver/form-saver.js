/*
 * FormSaver made by Felipe Takeu Iwamoto
 * 
 * Version: 1.0.0
 */

class FormSaver {
    constructor(options = {}){
        this.options = {
            localStorageKey: options.localStorageKey ? options.localStorageKey : "formSaver",
            saveDataOn: options.saveDataOn ? options.saveDataOn : "blur"
        }

        this.setFormField();
        this.fillForms();
        // this.clearOnSubmit();
    }

    getFormSaver(name) {
        let data = JSON.parse(localStorage.getItem(name));
        return data !== null ? data : {};
    }
    
    setFormSaver(name, data) {
        localStorage.setItem(name, JSON.stringify(data));
    }
    
    removeFormSaver(name, data) {
        localStorage.removeItem(name);
    }

    getFormById(id){
        let data = this.getFormSaver(this.options.localStorageKey)[id];
        return data !== undefined ? data : {};
    }

    setFormById(id, data = {}){
        let formSaver = this.getFormSaver(this.options.localStorageKey);
        this.setFormSaver(this.options.localStorageKey, { ...formSaver, [id]: data});
    }

    removeFormById(id){
        let formSaver = this.getFormSaver(this.options.localStorageKey);
        let newFormSaver = {};

        Object.keys(formSaver).filter((formId) => {
            if((formId !== id)){
                newFormSaver[formId] = formSaver[formId];
            }
        });

        this.setFormSaver(this.options.localStorageKey, newFormSaver);
    }

    setFormField(){
        let fields = document.querySelectorAll(`form[id] input[type="text"], form[id] textarea`);
        
        fields.forEach((field) => {
            field.addEventListener(this.options.saveDataOn, (e) => {
                let form = field.closest("form[id]");
                let formId = form.getAttribute("id");

                this.setFormSaver(
                    this.options.localStorageKey, 
                    { ...this.getFormSaver(this.options.localStorageKey),
                        [formId]: { ...this.getFormById(formId), [field.name]: field.value }
                    }
                );
            })
        })
    }

    fillForms() {
        let forms = document.querySelectorAll(`form[id]`);

        forms.forEach((form) => {
            let fields = document.querySelectorAll(`#${form.id} input[type="text"], #${form.id} textarea`);
            let _form = this.getFormById(form.id);
            fields.forEach((field) => {
                if(_form[field.name] !== undefined){
                    field.value = _form[field.name];
                }
            })
        })
    }

    clearOnSubmit(){
        let forms = document.querySelectorAll(`form[id]`);

        forms.forEach((form) => {
            form.addEventListener("submit", () => {
                this.removeFormById(form.id, {});
            })
        })
    }
}