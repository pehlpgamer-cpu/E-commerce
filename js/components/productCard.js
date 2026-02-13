export function productCard(id, name, categories, price = 0.00)
{
    const card = 
    `
    <article class="flex justify-center">
        <article class="bg-white p-4 border rounded-md flex flex-col gap-1 w-64 ">
            <img class="h-54 bg-gray-300 rounded-md" alt="png"/>
            <label class="text-xl">${name}</label>
            <label>₱ ${price}</label>

            <div class="grow"></div>

            <div class="flex gap-1">

                <button onclick="alert(${id})" class="flex-1 p-1 rounded-md border hover:bg-gray-100 cursor-pointer">
                    <i class="bi bi-bag-fill cursor-pointer"></i>
                    <label class="cursor-pointer">Buy</label>
                </button>

                <button onclick="openCartModal(${id}, '${name}', ${price})" class="flex-1 p-1 rounded-md border hover:bg-gray-100 cursor-pointer">
                    <i class="bi bi-cart4"></i>
                    <label>Cart</label>
                </button>
            </div>
        </article>
    </article>
    `;
    return card;
}