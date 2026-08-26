<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Administre su agenda ')}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">



<figure>
  <blockquote class="blockquote">
    <h3><p class="text-center">CE YOLO KALLI</p></h3>
  </blockquote>
  
</figure>

    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title></title>
    <style>
        .calendar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        td {
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="calendar-header">
        <button id="prev" class="btn btn-primary">&lt; Mes Anterior</button>
        <h2 id="monthYear" class="text-center"></h2>
        <button id="next" class="btn btn-primary">Mes Siguiente &gt;</button>
    </div>
    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th>Domingo</th>
                <th>Lunes</th>
                <th>Martes</th>
                <th>Miércoles</th>
                <th>Jueves</th>
                <th>Viernes</th>
                <th>Sábado</th>
            </tr>
        </thead>
        <tbody id="calendar-body"></tbody>
    </table>
</div>

<div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="eventModalLabel">Agregar Evento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <label for="eventInput">Nota:</label>
                <input type="text" id="eventInput" class="form-control" placeholder="Escribe tu evento aquí">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" id="saveEvent">Guardar Evento</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    const calendarBody = document.getElementById('calendar-body');
    const monthYear = document.getElementById('monthYear');
    const eventInput = document.getElementById('eventInput');
    const saveEvent = document.getElementById('saveEvent');

    let currentDate = new Date();
    let events = JSON.parse(localStorage.getItem('events')) || {};

    function renderCalendar(date) {
        calendarBody.innerHTML = '';
        const month = date.getMonth();
        const year = date.getFullYear();
        monthYear.innerText = date.toLocaleString('default', { month: 'long', year: 'numeric' });

        const firstDay = new Date(year, month, 1).getDay();
        const daysInMonth = new Date(year, month + 1, 0).getDate();

        let row = document.createElement('tr');

        for (let i = 0; i < firstDay; i++) {
            row.appendChild(document.createElement('td'));
        }

        for (let day = 1; day <= daysInMonth; day++) {
            const cell = document.createElement('td');
            cell.innerText = day;

            cell.addEventListener('click', () => openModal(year, month, day));

            const eventKey = `${year}-${month + 1}-${day}`;
            if (events[eventKey]) {
                const eventText = document.createElement('div');
                eventText.innerText = events[eventKey];
                cell.appendChild(eventText);
            }

            row.appendChild(cell);

            if ((firstDay + day) % 7 === 0) {
                calendarBody.appendChild(row);
                row = document.createElement('tr');
            }
        }

        calendarBody.appendChild(row);
    }

    function openModal(year, month, day) {
        $('#eventModal').modal('show');
        eventInput.value = '';

        saveEvent.onclick = () => {
            const eventKey = `${year}-${month + 1}-${day}`;
            events[eventKey] = eventInput.value;
            localStorage.setItem('events', JSON.stringify(events));
            eventInput.value = '';
            $('#eventModal').modal('hide');
            renderCalendar(currentDate);
        };
    }

    document.getElementById('prev').addEventListener('click', () => {
        currentDate.setMonth(currentDate.getMonth() - 1);
        renderCalendar(currentDate);
    });

    document.getElementById('next').addEventListener('click', () => {
        currentDate.setMonth(currentDate.getMonth() + 1);
        renderCalendar(currentDate);
    });

    renderCalendar(currentDate);
</script>
</body>
</html>

</div>
            </div>
        </div>
    </div>
</x-app-layout>