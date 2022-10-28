const c = console.log.bind(document);

// - - - - - - - - MENGGUNAKAN CARA BIASA - - - - - - - -

// // TODOS SECTION
// let submit = document.getElementById("submit");
// const todos = document.getElementById("todos-new");

// // add list
// submit.addEventListener("click", function (e) {
//   e.preventDefault();
//   // get value
//   let nameTodos = document.getElementById("todos-name");
//   let dateTodos = document.getElementById("todos-date");
//   let msgTodos = document.getElementById("todos-msg");

//   let length = localStorage.getItem("name", `${nameTodos.value}`);

//   if (nameTodos.value == "" || dateTodos.value == "" || msgTodos.value == "") {
//     alert("data tidak boleh kosong!");
//   } else {
//     // tambahkan value ke dalam table
//     let newTodos = `<li class="list-group-item d-flex justify-content-between align-items-start">
//     <div class="ms-4 me-auto">
//       <div class="fw-bold">${nameTodos.value}</div>
//       ${msgTodos.value}
//       <div class="text-muted">${dateTodos.value}</div>
//     </div>
//       <span onclick ="editItem(this)"class="fa fa-edit text-success me-1"></span>
//       <span onclick ="removeItem(this)" class="fa fa-trash text-danger"></span>
//       </li>`;

//     todos.insertAdjacentHTML("afterbegin", newTodos);
//     //
//     // save local storage
//     localStorage.setItem("name", `${nameTodos.value}`);
//     localStorage.setItem("date", `${dateTodos.value}`);
//     localStorage.setItem("msg", `${msgTodos.value}`);

//     // // empty field
//     nameTodos.value = "";
//     dateTodos.value = "";
//     msgTodos.value = "";
//   }
// });

// // delete list
// function removeItem(el) {
//   // el.parentElement.remove();
//   let y = confirm("yakin? ");
//   y ? el.parentElement.remove() : null;
// }

// - - - - - - - - MENGGUNAKAN CARA PUSH ARRAY OBJECT KE LOCAL STORAGE - - - - - - - -

// when the page loads
// check local storage for Data
// update values form using Data

document.addEventListener("submit", function (e) {
  e.preventDefault();

  //   get values from form input
  let name = document.getElementById("todos-name").value;
  let date = document.getElementById("todos-date").value;
  let msg = document.getElementById("todos-msg").value;
  // check validation data
  if (!name || !date || !msg) {
    alert("ada kolom yang kosong! ");
  } else {
    let newTodos = `<li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-4 me-auto">
      <div class="fw-bold">${name.value}</div>
      ${date.value}
      <div class="text-muted">${msg.value}</div>
    </div>
      <span onclick ="editItem(this)"class="fa fa-edit text-success me-1"></span>
      <span onclick ="removeItem(this)" class="fa fa-trash text-danger"></span>
      </li>`;

    let todos = document.getElementById("todos-form");
    todos.insertAdjacentHTML("afterbegin", newTodos);

    // save to localstorage
    const dataInfo = {
      name: name,
      date: date,
      msg: msg,
    };

    localStorage.setItem("dataInfo", JSON.stringify(dataInfo));
  }
});
