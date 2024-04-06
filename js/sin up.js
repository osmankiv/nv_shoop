const todoInput = document.querySelector('.todo-input');



const myObj = { name: "John", age: 31, city: "New York" };
const myJSON = JSON.stringify(myObj);

localStorage.setItem("testJSON", myJSON);