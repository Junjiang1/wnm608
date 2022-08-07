


const listItemTemplate = templater(o=>`
<a class="col-xs-12 col-md-4" href="product_item.php?id=${o.id}">
    <figure class="figure product display-flex flex-column">
        <div class="flex-stretch custom">
             <img src="/aau/wnm608/Jun_Jiang/img/${o.thumbnall}" alt="">
        </div>
        <figcaption class="flex-none">
            <div>${o.name}</div>
            <div>&dollar;${Number(o.price).toFixed(2)}</div>
        </figcaption>
    </figure>
</a>

`);