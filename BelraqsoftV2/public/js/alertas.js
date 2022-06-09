function registroExitosoSimple(){
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })
      
      Toast.fire({
        icon: 'success',
        title: 'Registro Exitoso'
      })
}

function registroExitosoCompleto(){
    Swal.fire({
        icon: 'success',
        title: 'Registro Exitoso',
        showConfirmButton: false,
        timer: 2000
      })
}



