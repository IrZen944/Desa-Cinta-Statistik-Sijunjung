// Notyf
    import { Notyf } from 'notyf';
    import 'notyf/notyf.min.css'; // for React, Vue and Svelte

    // Create an instance of Notyf
    const notyf = new Notyf({duration: 3000});

    Livewire.on("error", (message) => {
        notyf.error(message);
    });

    Livewire.on("success", (message) => {
        notyf.success(message);
    });

//Console log
    Livewire.on('consolelog', (text) => {
        console.log(text);
    });

    window.addEventListener('failedlogin', event => {
        alert(event.detail.text);
    })
