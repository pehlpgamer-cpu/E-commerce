

export function topNavBar(navContainer) {
    navBtns = '';

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

    navContainer.innerHTML = navBtns;
}



const navBtnData = 
[
    {
        iconClass: 'bi bi-house-fill',
        label: 'Home',
        link: ''
    },
    {
        iconClass: '',
        label: 'Products',
        link: ''
    }
];