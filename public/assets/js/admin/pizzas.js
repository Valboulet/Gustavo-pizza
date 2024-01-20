

// Create / Update pizzas ingredients (in modal) --------------------------------------------------

const getIngredientName = document.getElementById('ingredientsDataList');

getIngredientName.addEventListener('change', () => {
    const ingredient = document.createElement('div')
    ingredient.setAttribute('class', 'form-check')
    getIngredientName.appendChild(ingredient)
    
    console.log(getIngredientName);

    // console.log(getIngredientName.value);

});

