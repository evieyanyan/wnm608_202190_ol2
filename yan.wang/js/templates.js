var category = []
const listItemTemplate = templater(o=>{
    if(!category.includes(o.category)){
        category.push(o.category)
    }
    
    return `
        <a class="col-xs-12 col-md-4" href="product_item.php?id=${o.id}">
        <figure class="figure product-overlay display-flex flex-column">
        <div class="flex-stretch"><img src="img/${o.thumbnail}" alt=""></div>
        <figcaption class="flex-none">
            <div class="caption-body">
                <div>${o.name}</div>
                <div>&dollar;${o.price.toFixed(2)}</div>
            </div>
        </figcaption>
        </figure>
    </a>
        `
});