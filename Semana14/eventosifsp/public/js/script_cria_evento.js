// Importe a biblioteca SweetAlert2
import Swal from 'sweetalert2';

document.addEventListener('DOMContentLoaded', function () {
    const criarEventoButton = document.getElementById('criarEventoButton');
    const eventoForm = document.getElementById('eventoForm');

    criarEventoButton.addEventListener('click', function (event) {
        event.preventDefault(); // Impede o envio do formulário

        // Exiba o SweetAlert
        Swal.fire({
            title: 'Evento criado com sucesso!',
            icon: 'success',
            showCancelButton: false,
            confirmButtonText: 'OK',
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirecione para a tela de eventos
                window.location.href = '/events';
            }
        });
    });
});
