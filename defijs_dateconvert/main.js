const convert = document.getElementById("convert");
const nbdays1 = document.getElementById("resultDays1");
const nbhours1 = document.getElementById("resultHours1");
const nbminutes1 = document.getElementById("resultMinutes1");
const nbseconds1 = document.getElementById("resultSeconds1");
const secondsInMinute = 60;
const minutesInHour = 60;
const hoursInDay = 24;
const daysInYear = 365;

convert.addEventListener("click", function() {
    let numberOfYears = document.getElementById("numberOfYears").value;
	if (!numberOfYears)
		numberOfYears = 0;
	let yb = numberOfYears / 4;
    let ndays = (365 * numberOfYears) + yb;
	let nhours = 0;
	let nmin = 0;
	let nsec = 0;
	nhours = ndays * 24;
	nmin = nhours * 60;
	nsec = nmin * 60;
	nbdays1.textContent = ndays + " days";
	nbhours1.textContent = nhours + " hours";
	nbminutes1.textContent = nmin + " minutes";
	nbseconds1.textContent = nsec + " seconds";
});

const convert2 = document.getElementById("convert2");
const result2 = document.getElementById("result2");
convert2.addEventListener("click", function() {
	let nconvert = document.getElementById("numbertoconvert").value;
	let unitb = document.getElementById("what").value;
	let unite = document.getElementById("inwhat").value;
	switch (unitb) {
		case 'year':
			unitb = 1;
			break;
		case 'day':
			unitb = 2;
			break;
		case 'hour':
			unitb = 3;
			break;
		case 'minute':
			unitb = 4;
			break;
		case 'second':
			unitb = 5;
			break;
		default:
			unitb = 0;
			console.log("unkonw type");
	}
	switch (unite) {
		case 'year':
			unite = 1;
			break;
		case 'day':
			unite = 2;
			break;
		case 'hour':
			unite = 3;
			break;
		case 'minute':
			unite = 4;
			break;
		case 'second':
			unite = 5;
			break;
		default:
			unite = 0;
			console.log("unkonw type");
	}
	if (unitb != 0 && unite != 0)
	{
		while (unitb < unite)
		{
			unitb++;
			switch (unitb) {
				case 2:
					nconvert *= 365;
					break;
				case 3:
					nconvert *= 24;
					break;
				case 4:
					nconvert *= 60;
					break;
				case 5:
					nconvert *= 60;
					break;
			}
		}
		while (unitb > unite)
		{
			unitb--;
			switch (unitb) {
				case 1:
					nconvert /= 365;
					break;
				case 2:
					nconvert /= 24;
					break;
				case 3:
					nconvert /= 60;
					break;
				case 4:
					nconvert /= 60;
					break;
			}
		}
		result2.innerHTML = (nconvert + " </br>");
	}
})