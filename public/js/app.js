let students = [];
let id = null;
fetch('http://127.0.0.1:8001/api/students')
    .then(res => res.json())
    .then(res => {
        const data = res.students;
        if (students) {
            students = [...data];
            showStudentData(students);
        }
    });


getId('create').addEventListener('click', e => {
    e.preventDefault();


    const name = getId('name').value;

    const email = getId('email').value;

    fetchApi('http://127.0.0.1:8001/api/create/student', 'POST', { name, email })

        .then(res => res.json())
        .then(res => {
            if (res.errors) {
                throw (res);
            }
            students = [...students, res];
            showStudentData(students);
            cleaner();
        })
        .catch(res => {
            res.errors && errorsHandler(res.errors)
        })
})

getId('student-list').addEventListener('click', (e) => {
    if (e.target.classList.contains('edit-student')) {
        id = e.target.dataset.id;
        let find = students.find(students => Number(students.id) === Number(id));
        getId('edit_email').value = find.email;
        getId('edit_name').value = find.name;
    }

    if (e.target.classList.contains('delete-student')) {
        id = e.target.dataset.id;
    }
})

getId('delete-api').addEventListener('click', (e) => {
    e.preventDefault();
    fetchApi(`http://127.0.0.1:8001/api/${id}/student`, 'DELETE', {})
        .then(res => res.json())
        .then(res => {
            if (res.errors) {
                throw (res);
            }

            students = students.filter(student => Number(student.id) !== Number(id))
            showStudentData(students);

        }).catch(err => console.log(err))
})



getId('update-api').addEventListener('click', (e) => {
    e.preventDefault();
    const edit_name = getId('edit_name').value;
    const edit_email = getId('edit_email').value;
    fetchApi(`http://127.0.0.1:8001/api/${id}/student`, 'PUT', { edit_name, edit_email })
        .then(res => res.json())
        .then(res => {
            if (res.errors) {
                throw (res);
            }
            console.log(res);
            let edit = students.map(student => {
                if (Number(student.id) === Number(id)) {
                    student.name = edit_name;
                    student.email = edit_email;
                }
                return student;
            })
            students = [...edit];
            // getId('edit-alert').value = 'Update Successfully'
            showStudentData(students);
            cleaner();
        }).catch(res => res.errors && errorsHandler(res.errors))
})

getId('upload-image').addEventListener('submit',(e)=> {
    e.preventDefault();
    let formData =new FormData();
    formData.append('file',getId('file').files[0]);
    fetch('http://127.0.0.1:8001/api/img/upload',{
        method:'POST',
        headers: {
            'X-CSRF-TOKEN': getId('csrf-token').getAttribute('content'),
            'Accept': 'application/json',
            'X-Requested-With': 'XMLHttpRequest',
        },
        body: formData,
    })
    .then(res => res.json())
    .then(res => {
        if(res.errors) {
            throw (res)
        }
        alert('Image Uploaded Successfully')
        cleaner();
    })
    .catch(res => res.errors && errorsHandler(res.errors    ));
})

