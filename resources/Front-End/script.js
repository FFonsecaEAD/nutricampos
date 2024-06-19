//Código que coloca a data de hoje no botão do calendário
let x = new Intl.DateTimeFormat('pt-BR', {dateStyle: 'full'}).format();
	document.getElementById("data").innerHTML = x;
//

//Código que cria um calendário baseado na data de hoje
const isLeapYear = (ano) => {
  return (
    (ano % 4 === 0 && ano % 100 !== 0 && ano % 400 !== 0) ||
    (ano % 100 === 0 && ano % 400 === 0)
  );
};
const getFebDays = (ano) => {
  return isLeapYear(ano) ? 29 : 28;
};

const meses = ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'];
const m = new Date();
let mes = meses[m.getMonth()];
document.getElementById("mes").innerHTML = mes;

const a = new Date();
let ano = a.getFullYear();
document.getElementById("ano").innerHTML = ano;

const generateCalendar = (month, year) => {
  let calendar_days = document.querySelector('.calendar-days');
  calendar_days.innerHTML = '';
  let calendar_header_year = document.querySelector('#year');
  let days_of_month = [
      31,
      getFebDays(year),
      31,
      30,
      31,
      30,
      31,
      31,
      30,
      31,
      30,
      31,
    ];

  let currentDate = new Date();

  let first_day = new Date(year, month);

  for (let i = 0; i <= days_of_month[month] + first_day.getDay() - 1; i++) {

    let day = document.createElement('div');

    if (i >= first_day.getDay()) {
      day.innerHTML = i - first_day.getDay() + 1;

      if (i - first_day.getDay() + 1 === currentDate.getDate() &&
        year === currentDate.getFullYear() &&
        month === currentDate.getMonth()
      ) {
        day.classList.add('current-date');
      }
    }
    calendar_days.appendChild(day);
  }
};

let currentDate = new Date();
let currentMonth = { value: currentDate.getMonth() };
let currentYear = { value: currentDate.getFullYear() };
generateCalendar(currentMonth.value, currentYear.value);
//

//Código que opera o sistema de abas
function openTab(evt, Tab) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(Tab).style.display = "block";
  evt.currentTarget.className += " active";
}

function closeTab(Tab) {
  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(Tab).style.display = "none";
  evt.currentTarget.className -= " active";
}
//

//Código que abre o formulário dentro da aba
function openForm(Form) {
  document.getElementById(Form).style.display = "block";
}

function closeForm(Form) {
  document.getElementById(Form).style.display = "none";
}
//