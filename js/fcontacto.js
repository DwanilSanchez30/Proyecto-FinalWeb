    const form = document.getElementById('formulario');
    
    const successMessage = document.getElementById('submitSuccessMessage');

    const submitHandler = async (event) => {
        event.preventDefault(); 
        const response = await fetch(event.target.action, {
            method: form.method,
            body: new FormData(form),
            headers: {
                'Accept': 'application/json'
            }
        });
        
        if (response.ok) {
            form.reset();
            successMessage.classList.remove('d-none');
        }
    };


    form.addEventListener('submit', submitHandler);
