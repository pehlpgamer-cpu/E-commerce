import { baseURL } from "../configs.js";

//const baseURL = 'http://localhost/E-commerce/'; // temporary

export function topNavBar() {
    let navBtns = '';

    for (let i of navBtnData)
    {
        navBtns += 
        `
        <a href="${i.link}" class="bg-white p-1 flex gap-1 rounded-md hover:scale hover:bg-gray-200">
            <i class="${i.iconClass}"></i>
            <label>${i.label}</label>
        </a>
        `;
    }
    return navBtns;
}



const navBtnData = 
[
    {
        iconClass: 'bi bi-house-fill',
        label: 'Home',
        link: baseURL + 'pages/public/index.php'
    },
    {
        iconClass: '',
        label: 'Products',
        link: baseURL + 'pages/public/products.php'
    },
    {
        iconClass: '',
        label: 'Cart',
        link: baseURL + 'pages/customer/cart.php'
    },
    {
        iconClass: '',
        label: 'Account',
        link: baseURL + 'pages/customer/account.php'
    },
];