import './bootstrap';

import Swal from 'sweetalert2';



addEventListener('newDB_Alert',function(){
    Swal.fire({
        template: '#add_new_DB_Alert'
    }).then((e)=>{
        Livewire.first().set('name',e.value)
    })
})


