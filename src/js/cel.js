const tbody = document.querySelector('.calendar-table tbody');
    const firstDayOfMonth = new Date(2023, 11).getDay();
    const daysInMonth = 32 - new Date(2023, 11, 32).getDate(); 
    const tableRows = [];


let currentDay = 1;
let currentColumn = 0;

for (let i = 0; i < daysInMonth + firstDayOfMonth; i++) {
  
  if (i % 7 === 0) {
    tableRows.push([]); 
  }

  const cell = document.createElement('td');
  cell.textContent = currentDay;
  currentDay++;

  // Add "absent" class based on your logic
//   if (isAbsent(currentYear, currentMonth, i - firstDayOfMonth + 1)) {
//     cell.classList.add('absent');
//   }

  tableRows[tableRows.length - 1].push(cell);
  currentColumn = (currentColumn + 1) % 7;
}

tableRows.forEach((rowCells) => {
  const row = tbody.insertRow();
  rowCells.forEach((cell) => row.appendChild(cell));
});