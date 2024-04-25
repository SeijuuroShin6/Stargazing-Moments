const categories = [
	{
		type: 'Activitées. en Intérieur',
	},
	{
		type: 'Activitées. en Extérieur',
	},
	{
		type: 'Activitées. en Altitude',
	},

];

const listActivities = document.getElementById('listActivities');

const display = (filter) => {
	listActivities.innerHTML = '';
	for (let i = 0; i < categories.length; i++) {

		if (filter == undefined ||  categories[i].type.includes(filter)) {
			const card = document.createElement('section');
			card.classList.add('cards');

			const type = document.createElement('h2');
			type.textContent = categories[i].type;
			card.appendChild(type);

			listActivities.appendChild(card);
		}
	}
}


document.getElementById('IndoorAcc').addEventListener('click', () => display('Activitées. en Intérieur'));
document.getElementById('OutdoorAcc').addEventListener('click', () => display('Activitées. en Extérieur'));
document.getElementById('HighSkyAcc').addEventListener('click', () => display('Activitées. en Altitude'));
document.getElementById('Clear').addEventListener('click', () => display());