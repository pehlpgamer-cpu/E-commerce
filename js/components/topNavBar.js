import { baseURL } from "../configs.js";

//const baseURL = 'http://localhost/E-commerce/'; // temporary

export function topNavBar(highlightIndex) {
    let navBtns = '';
    let btnClass = '';
    const nonHighlightedBtnClass = 'bg-white rounded-md hover:scale hover:bg-gray-200';
    const highlightedBtnClass = 'bg-black text-white font-bold rounded-md hover:scale hover:bg-gray-200';

    for (let i = 0; i < navBtnData.length; i++)
    {
        if (highlightIndex === i)btnClass = highlightedBtnClass;
        else btnClass = nonHighlightedBtnClass;

        navBtns += 
        `
        <a href="${navBtnData[i].link}" class="${btnClass} grow p-1 flex gap-1 justify-center">
            <i class="${navBtnData[i].iconClass}"></i>
            <label>${navBtnData[i].label}</label>
        </a>
        `;
    }
    return navBtns;
}



const navBtnData = 
[
    {
        iconClass: 'bi bi-house-fill',
        label: 'Home!!!',
        link: baseURL + 'pages/public/index.php'
    },
    {
        iconClass: 'bi bi-bag-fill',
        label: 'Products',
        link: baseURL + 'pages/public/products.php'
    },
    {
        iconClass: 'bi bi-cart4',
        label: 'Cart',
        link: baseURL + 'pages/customer/cart.php'
    },
    {
        iconClass: 'bi bi-person-circle',
        label: 'Account',
        link: baseURL + 'pages/customer/account.php'
    },
];