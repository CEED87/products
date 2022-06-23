let productType;
let allProdukts; 
let form;  


// Visible/Hide elements form

if (document.querySelector('#form_elements')) {

	productType = document.querySelector('#productType');
	allProdukts = document.querySelector('#form_elements').children;
	
	productType.addEventListener('change', () => {

		for (var i = 0; i < allProdukts.length; i++) {

			if (productType.value === allProdukts[i].dataset.type) {
				 allProdukts[i].classList.add('visible');
				 allProdukts[i].classList.remove('hide');
			} else {
				allProdukts[i].classList.add('hide');
				 allProdukts[i].classList.remove('visible');
			}
		}
	})
}
	

// Form validation


const addAndRemuveClass = (input, addClass, remuveClass) => {

		if(input) {
			const inputNum = input.previousElementSibling;
			input.textContent = 'Please fill in the field';
			input.classList.add(addClass);
			input.classList.remove(remuveClass);

			if (inputNum.id === 'price' && inputNum.value !== '') {
		dataTypeCheck(input);}
		if (inputNum.id === 'size' && inputNum.value !== '') {
		dataTypeCheck(input);}
		if (inputNum.id === 'height' && inputNum.value !== '') {
		dataTypeCheck(input);}
		if (inputNum.id === 'width' && inputNum.value !== '') {
		dataTypeCheck(input);}
		if (inputNum.id === 'length' && inputNum.value !== '') {
		dataTypeCheck(input);}
		if (inputNum.id === 'weight' && inputNum.value !== '') {
		dataTypeCheck(input);}
		}
}

const changeInput = () => {
	form = document.querySelector('#product_form');
		form.addEventListener('focusout', (e) => {
			if (e.target.value === '') {
				e.target.style.borderColor = 'red';
				addAndRemuveClass(e.target.nextElementSibling,'span','hide');
			}else {
					e.target.style.borderColor = null;
					addAndRemuveClass(e.target.nextElementSibling, 'hide','span');
			}
		
		})
}


const dataTypeCheck = (input) => {

	if (!Number(input.previousElementSibling.value)) {

		input.previousElementSibling.style.borderColor = 'red';
		input.textContent = 'The field must contain a numeric value';
		input.classList.add('span');
		input.classList.remove('hide');

	} else {
		input.classList.add('hide');
		input.classList.remove('span');
	}
}


const submitForm = (e) => {

	const visibleDiv = form.querySelectorAll('.visible');
			visibleDiv.forEach(classVisible => {

				const inputs = classVisible.querySelectorAll('input');
				inputs.forEach(input => {
					if (input.value === '') {
						e.preventDefault();
					}
				})
			})
} 


if (document.querySelector('#product_form')) {
	
	changeInput();

	form.addEventListener('submit', (e) => {	
		submitForm(e);	
	})

	productType.addEventListener('change', () => {
		form.addEventListener('submit', (e) => {
			submitForm(e);
		})
	})
}


// checkbox

const deleteProdukts = (e) => {
	const checked = document.querySelectorAll('.delete-checkbox:checked')
	if(checked.length === 0) {
	return e.preventDefault();
	} 
}


if (document.querySelectorAll('.delete-checkbox')) {
	const checkbox = document.querySelectorAll('.delete-checkbox');
	const formCheckbox = document.forms['produkts'];

	if (formCheckbox) {
		formCheckbox.addEventListener('submit', (e) => {
			deleteProdukts(e);	
		})
	}
	
	checkbox.forEach((el) => {
		el.addEventListener('click', () => {
			formCheckbox.addEventListener('submit', (e) => {
				deleteProdukts(e);
			})
		})
	})
}

	

	


	






