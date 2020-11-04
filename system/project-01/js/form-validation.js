let forms = document.querySelectorAll("form");

forms.forEach((form) => {
    form.addEventListener("submit", (currentForm) => {
        let formId = currentForm.target.getAttribute("id");
        let action = currentForm.target.getAttribute("action");
        let method = currentForm.target.getAttribute("method");
        let fields = document.querySelectorAll(`#${formId} .field`);

        let data = [...fields].map((field) => {
            setCallback(field, "", ``);

            let fieldId = field.getAttribute("id");
            let isRequired = field.dataset.required;
            if (!isRequired) { return { name: fieldId, status: true }; }

            if (!checkMandatory(field)) { return { name: fieldId, status: false }; }
            if (!checkMinLength(field)) { return { name: fieldId, status: false }; }
            if (!checkMaxLength(field)) { return { name: fieldId, status: false }; }
            if (!checkLength(field)) { return { name: fieldId, status: false }; }

            return { name: fieldId, status: true };
        })

        let formCheck = data.filter((field) => (!field.status));

        if (formCheck.length > 0) {
            currentForm.preventDefault();
            return;
        }
    })
})

let fields = document.querySelectorAll(`.field`);

fields.forEach((field) => {
    field.addEventListener("blur", (currentField) => {
        setCallback(currentField.target, "", ``);

        let isRequired = currentField.target.dataset.required;
        if (!isRequired) { return; }

        if (!checkMandatory(currentField.target)) { return; }
        if (!checkMinLength(currentField.target)) { return; }
        if (!checkMaxLength(currentField.target)) { return; }
        if (!checkLength(currentField.target)) { return; }

        return;
    })
})


let checkMandatory = (field) => {
    if (field.value.trim().length < 1) {
        setCallback(field, "error", `Este campo é obrigatório!`);
        return false;
    }
    return true;
}

let checkMinLength = (field) => {
    let hasMinLength = (field.getAttribute("data-minlength") !== null);
    if (hasMinLength) {
        let minLength = field.getAttribute("data-minlength");

        if (field.value.length < parseInt(minLength)) {
            setCallback(field, "error", `Digite no mínimo ${minLength} caracteres!`);
            return false;
        }
    }
    return true;
}

let checkMaxLength = (field) => {
    let hasMaxLength = (field.getAttribute("data-maxlength") !== null);
    if (hasMaxLength) {
        let maxLength = field.getAttribute("data-maxlength");

        if (field.value.length > parseInt(maxLength)) {
            setCallback(field, "error", `Digite no mínimo ${maxLength} caracteres!`);
            return false;
        }
    }
    return true;
}

let checkLength = (field) => {
    let hasLength = (field.getAttribute("data-length") !== null);
    if (hasLength) {
        let length = field.getAttribute("data-length");

        if (field.value.length !== parseInt(length)) {
            setCallback(field, "error", `Este campo deve ter ${length} caracteres.`);
            return false;
        }
    }
    return true;
}

let setCallback = (field, status = "", message) => {
    let fieldId = field.getAttribute("id");
    let fieldGroup = field.closest(".field-group");

    fieldGroup.classList.remove("error");
    status && fieldGroup.classList.add(status);

    let callback = document.querySelector(`label[for="${fieldId}"] > .callback`);
    callback.innerHTML = message;
    callback.setAttribute("title", message);
}