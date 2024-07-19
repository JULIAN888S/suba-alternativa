document.addEventListener("DOMContentLoaded", function() {
    const scheduleElement = document.getElementById('schedule');
    const currentProgramInfoElement = document.getElementById('current-program-info');

    const schedule = [
        { name: "El Despertador", presenter: "Wilson Castiblanco García", days: [1, 2, 3, 4, 5], start: "04:00", end: "06:00" },
        { name: "El Informativo de la Mañana", presenter: "Raúl Benítez Ortega", days: [1, 2, 3, 4, 5], start: "06:00", end: "09:00" },
        { name: "Gente Cuidando Gente", presenter: "Programa de la Nueva Eps", days: [1, 5], start: "09:30", end: "10:00" },
        { name: "La Sobremesa Vallenata", presenter: "José Ruiz", days: [1, 2, 3, 4, 5], start: "12:00", end: "13:00" },
        { name: "Tardes Alternativas", presenter: "Aura Nelly Díaz", days: [1, 2, 3, 4, 5], start: "14:00", end: "17:00" },
        { name: "Cabalgando por el Llano", presenter: "Edison Tumay", days: [1, 2, 3, 4, 5], start: "17:00", end: "18:00" },
        { name: "Impacto Deportivo", presenter: "Sherman Beltrán", days: [1, 5], start: "20:00", end: "21:00" },
        { name: "Románticas de Siempre", presenter: "Wilson Castiblanco García", days: [1, 2, 3, 4, 5], start: "20:00", end: "22:00" },
        { name: "Románticas de Siempre", presenter: "Wilson Castiblanco García", days: [6], start: "06:00", end: "08:00" },
        { name: "Sentimiento Popular", presenter: "Wilson Castiblanco García", days: [1, 2, 3, 4, 5], start: "22:00", end: "24:00" },
        { name: "Propiedad Horizontal – Vivamos en Armonía y Convivencia", presenter: "Dr. Jorge Arámbula", days: [3], start: "09:00", end: "11:00" }
    ];

    const now = new Date();
    const currentDay = now.getDay(); // 0: Sunday, 1: Monday, ..., 6: Saturday
    const currentTime = now.getHours() * 60 + now.getMinutes();

    let currentProgram = "No hay programas en este momento.";
    let nextProgram = "No hay programas a continuación.";
    let nextNextProgram = "No hay programas después.";

    const filteredSchedule = schedule.filter(program => program.days.includes(currentDay));

    for (let i = 0; i < filteredSchedule.length; i++) {
        const program = filteredSchedule[i];
        const [startHours, startMinutes] = program.start.split(':').map(Number);
        const [endHours, endMinutes] = program.end.split(':').map(Number);
        const startTime = startHours * 60 + startMinutes;
        const endTime = endHours * 60 + endMinutes;

        if (currentTime >= startTime && currentTime < endTime) {
            currentProgram = `Estamos presentando: ${program.name} con Presentador ${program.presenter} (${program.start} - ${program.end})`;
            nextProgram = filteredSchedule[i + 1] ? `A continuación: ${filteredSchedule[i + 1].name} (${filteredSchedule[i + 1].start} - ${filteredSchedule[i + 1].end})` : "No hay programas a continuación.";
            nextNextProgram = filteredSchedule[i + 2] ? `Después: ${filteredSchedule[i + 2].name} (${filteredSchedule[i + 2].start} - ${filteredSchedule[i + 2].end})` : "No hay programas después.";
            break;
        } else if (currentTime < startTime) {
            currentProgram = "No hay programas en este momento.";
            nextProgram = `A continuación: ${program.name} (${program.start} - ${program.end})`;
            nextNextProgram = filteredSchedule[i + 1] ? `Después: ${filteredSchedule[i + 1].name} (${filteredSchedule[i + 1].start} - ${filteredSchedule[i + 1].end})` : "No hay programas después.";
            break;
        }
    }

    currentProgramInfoElement.innerHTML = `<p>${currentProgram}</p>`;
    scheduleElement.innerHTML = `<p>${nextProgram}</p><p>${nextNextProgram}</p>`;
});

document.addEventListener("DOMContentLoaded", function() {
    const chevron = document.querySelector('.audio-chevron');
    const audioPlayer = document.querySelector('.audio-player');
  
    chevron.addEventListener('click', function() {
      if (audioPlayer.classList.contains('hidden')) {
        audioPlayer.classList.remove('hidden');
      } else {
        audioPlayer.classList.add('hidden');
      }
    });
  
    // Resto del código para la funcionalidad del programa
  });
  