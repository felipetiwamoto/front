section("posts");

let chatContact = document.querySelector(".chat .chat__contact");
let chatConversation = document.querySelector(".chat .chat__conversation");
let chatContactToggler = document.querySelector(".chat .contact-toggler");
let chatConversationToggler = document.querySelectorAll(".chat .chat__right .icon__item");

if (chatContactToggler) {
    chatContactToggler.addEventListener("click", function () {
        chatConversation.style.display = "none";

        chatContact.style.display == "none" ?
            chatContact.style.display = "flex" : chatContact.style.display = "none";
    })
}

if (chatConversationToggler) {
    chatConversationToggler.forEach((item) => {
        item.addEventListener("click", function () {
            chatContact.style.display = "none";
    
            chatConversation.style.display == "none" ?
                chatConversation.style.display = "flex" : chatConversation.style.display = "none";
        })
    })
}