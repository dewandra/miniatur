// table todos
function table() {
  let table = `<tr>`;
  for (let i = 0; i < details.length; i++) {
    table =
      table +
      `<th scope="row">${i + 1}</th>
              <td>${details[i].name}</td>
              <td>${details[i].msg}</td>
              <td>${details[i].date}</td>
              <td>
                <span
                  onclick="editData(${i})"
                  class="fa fa-edit text-success" 
                  data-bs-toggle="modal"
                  data-bs-target="#editModal"
                ></span>
              </td>
              <td>
              <span
                  onclick="removeData(${i})"
                  class="fa fa-trash text-danger"
                ></span>
              </td>
            `;
    table = table + `</tr>`;
  }

  document.getElementById("todos-table").innerHTML = table;
}
let altTodos = document.getElementById("todos-alert");
altTodos.style.display = "none";

// array for data
details = [];
getData();
table();

// get data localStorage
function getData() {
  let data = localStorage.getItem("details");
  if (data) {
    details = JSON.parse(data);
  } else {
    setData();
  }
}

// set data localStorage
function setData() {
  localStorage.setItem("details", JSON.stringify(details));
}

// function add data
function addData() {
  let name = document.getElementById("todos-name");
  let date = document.getElementById("todos-date");
  let msg = document.getElementById("todos-msg");

  if (!name.value || !date.value || !msg.value) {
    altTodos.style.display = "block";
    return;
  } else {
    altTodos.style.display = "none";
  }
  // object for data
  let data = {
    name: name.value,
    date: date.value,
    msg: msg.value,
  };

  // push data object to array
  details.push(data);
  setData();

  table();

  name.value = "";
  date.value = "";
  msg.value = "";
}

// function delete data
function removeData(index) {
  if (confirm("sure? ")) {
    details.splice(index, 1);
    setData();
    table();
  } else {
    null;
  }
}

// function edit data
function editData(index) {
  // form modal
  var formModalBody = `<div class="row">
          <div class="col-md-6 mb-3">
            <input type="text" value="${details[index].name}" id="edit-todos-name" placeholder="name" />
          </div>
          <div class="col-md-6 mb-3">
            <input type="date" value="${details[index].date}" id="edit-todos-date" placebholder="date" />
          </div>
          <div class="col-md-12">
            <textarea placeholder="${details[index].msg}"
              id="edit-todos-msg"
            ></textarea>
          </div>
          </div>`;

  var formModalFooter = `<button
          type="button"
          class="btn btn-secondary"
          data-bs-dismiss="modal"
          >
          Close
          </button>
          <button type="button" class="btn btn-dark" onclick="updateData(${index})">
          Save changes
          </button>`;

  // put form modal to modal body
  document.querySelector(".modal-body").innerHTML = formModalBody;
  document.querySelector(".modal-footer").innerHTML = formModalFooter;
  let alt = document.getElementById("modal-alert");
  alt.style.display = "none";
  setData();
}

// function update data
function updateData(index) {
  let newName = document.getElementById("edit-todos-name");
  let newDate = document.getElementById("edit-todos-date");
  let newMsg = document.getElementById("edit-todos-msg");

  details[index] = {
    name: newName.value,
    date: newDate.value,
    msg: newMsg.value,
  };
  let altModal = document.getElementById("modal-alert");
  details[index] ? (altModal.style.display = "block") : null;
  setData();
  table();
}

let inputKeyword = document.getElementById("input-keyword");
let bodyFilter = document.getElementById("modal-body-filter");

function filterData() {
  // fiter
  let fil = details.filter(function (details) {
    if (details.name == inputKeyword.value) {
      return true;
    }
  });

  fil.forEach((e) => {
    bodyFilter.innerHTML = `<th>name</th>
    <th>message</th>
    <th>date</th>
    <tr>
    <td>${e.name}</td>
    <td>${e.msg}</td>
    <td>${e.date}</td>
    </tr>`;
  });
}
