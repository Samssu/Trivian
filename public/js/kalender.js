const calendarBody = document.getElementById("calendarBody");
const monthYear = document.getElementById("monthYear");
const prevMonth = document.getElementById("prevMonth");
const nextMonth = document.getElementById("nextMonth");

let currentDate = new Date();

function renderCalendar(date) {
    const year = date.getFullYear();
    const month = date.getMonth();
    const firstDay = new Date(year, month, 1).getDay();
    const daysInMonth = new Date(year, month + 1, 0).getDate();

    monthYear.textContent = date.toLocaleDateString("en-US", { year: "numeric", month: "long" });
    calendarBody.innerHTML = "";

    let cells = "";
    for (let i = 0; i < firstDay; i++) {
        cells += `<td></td>`;
    }

    for (let day = 1; day <= daysInMonth; day++) {
        cells += `<td>${day}</td>`;
        if ((day + firstDay) % 7 === 0) {
            cells += `<tr></tr>`;
        }
    }

    calendarBody.innerHTML = cells;

    const allCells = document.querySelectorAll("td");
    allCells.forEach(cell => {
        cell.addEventListener("click", () => {
            allCells.forEach(c => c.classList.remove("selected"));
            cell.classList.add("selected");
        });
    });
}

prevMonth.addEventListener("click", () => {
    currentDate.setMonth(currentDate.getMonth() - 1);
    renderCalendar(currentDate);
});

nextMonth.addEventListener("click", () => {
    currentDate.setMonth(currentDate.getMonth() + 1);
    renderCalendar(currentDate);
});

renderCalendar(currentDate);


// Handle task click
function handleTaskClick(taskName) {
    alert(`You clicked on the ${taskName} task!`);
}

// Handle "See All" click
document.getElementById('seeMore').addEventListener('click', function (e) {
    e.preventDefault();
    alert('See All tasks clicked!');
});
