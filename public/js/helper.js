// 'use strict';


function getId(val) {
    return document.getElementById(val);
}

function getAll(val) {
    return document.querySelectorAll(val);
}

function element(val) {
    return document.createElement(val);
}

function textNode(val) {
    return document.createTextNode(val);
}

function getSelector(val) {
    return document.querySelector(val);
}

function fetchApi(url, method, data) {
    return fetch(url, {
        method,
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': getId('csrf-token').getAttribute('content'),
            'Accept': 'application/json',
            'X-Requested-With': 'XMLHttpRequest',
        },
        body: JSON.stringify(data),
    })
}

function errorsHandler(error) {
    for (x in error) {
        getSelector(`.error-${x}`).innerHTML = error[x][0];
    }
}

function showStudentData(students) {

    let studentRow = '';
    students.map((student, index) => {
        studentRow += `<tr>
                            <td>${index + 1}</td>
                            <td>${student.name}</td>
                            <td>${student.email}</td >
                            <td class="d-flex">
                                <button class="btn btn-warning me-2 edit-student" data-id="${student.id}" data-bs-toggle="modal" data-bs-target="#edit-modal">Edit</button>
                                <button class="btn btn-danger delete-student" data-bs-toggle="modal"  data-bs-target="#delete-modal"  data-id="${student.id}">Delete</button>
                            </td >
                      </tr > `
    })

    getId('student-list').innerHTML = studentRow;
}

function cleaner() {
    getAll('.error').forEach(e => {
        e.innerHTML = ''
    });

    getAll('.input').forEach(e => {
        e.value = '';
    })
}