// Lógica para o Modo Escuro
const darkModeToggle = document.getElementById('darkModeToggle');
const body = document.getElementById('body');

darkModeToggle.addEventListener('click', () => {
    body.classList.toggle('dark-mode');
});

// Lógica para o Seletor de Idiomas (básico)
const translations = {
    'pt-BR': {
        siteTitle: 'Jornada do Desenvolvedor',
        inicio: 'Início',
        sobre: 'Sobre',
        servicos: 'Serviços',
        projetos: 'Projetos',
        blog: 'Blog',
        contato: 'Contato',
        heroHeading: 'Bem-vindo à Jornada do Desenvolvedor',
        heroText: 'Explorando o mundo da tecnologia e ajudando todos a acessá-la com mais facilidade.',
        sobreHeading: 'Sobre Nós',
        sobreText: 'Somos apaixonados por tecnologia e buscamos tornar o conhecimento acessível a todos.',
        depoimentosHeading: 'O que nossos usuários dizem',
        projetosHeading: 'Projetos em Destaque',
        servicosHeading: 'Nossa Jornada: Conhecimento e Crescimento',
        blogHeading: 'Últimos Artigos do Blog',
        projectSearch: 'Buscar Projetos',
        projectCategory: 'Todas as Categorias',
        blogSearch: 'Buscar Artigos',
        blogCategory: 'Todas as Categorias',
        newsletterHeading: 'Inscreva-se na Newsletter',
        newsletterText: 'Receba as últimas novidades e artigos diretamente no seu email.',
        newsletterButton: 'Inscrever'
    },
    'en-US': {
        siteTitle: 'Developer\'s Journey',
        inicio: 'Home',
        sobre: 'About',
        servicos: 'Services',
        projetos: 'Projects',
        blog: 'Blog',
        contato: 'Contact',
        heroHeading: 'Welcome to the Developer\'s Journey',
        heroText: 'Exploring the world of technology and helping everyone access it more easily.',
        sobreHeading: 'About Us',
        sobreText: 'We are passionate about technology and aim to make knowledge accessible to all.',
        depoimentosHeading: 'What our users say',
        projetosHeading: 'Featured Projects',
        servicosHeading: 'Our Journey: Knowledge and Growth',
        blogHeading: 'Latest Blog Posts',
        projectSearch: 'Search Projects',
        projectCategory: 'All Categories',
        blogSearch: 'Search Articles',
        blogCategory: 'All Categories',
        newsletterHeading: 'Subscribe to Newsletter',
        newsletterText: 'Get the latest news and articles directly in your inbox.',
        newsletterButton: 'Subscribe'
    }
};

function changeLanguage(lang) {
    // Update navigation links
    document.querySelectorAll('#mainNav a').forEach(a => {
        const key = a.dataset.lang;
        if (translations[lang][key]) a.textContent = translations[lang][key];
    });

    // Update footer links
    document.querySelectorAll('.footer-links-container a').forEach(a => {
        const key = a.dataset.lang;
        if (translations[lang][key]) a.textContent = translations[lang][key];
    });

    // Update main content
    document.getElementById('siteTitle').textContent = translations[lang].siteTitle;
    document.getElementById('heroHeading').textContent = translations[lang].heroHeading;
    document.getElementById('heroText').textContent = translations[lang].heroText;
    document.getElementById('sobreHeading').textContent = translations[lang].sobreHeading;
    document.getElementById('sobreText').textContent = translations[lang].sobreText;
    document.getElementById('depoimentosHeading').textContent = translations[lang].depoimentosHeading;
    document.getElementById('projetosHeading').textContent = translations[lang].projetosHeading;
    document.getElementById('servicosHeading').textContent = translations[lang].servicosHeading;
    document.getElementById('blogHeading').textContent = translations[lang].blogHeading;
    document.getElementById('projectSearch').placeholder = translations[lang].projectSearch;
    document.getElementById('projectCategory').options[0].textContent = translations[lang].projectCategory;
    document.getElementById('blogSearch').placeholder = translations[lang].blogSearch;
    document.getElementById('blogCategory').options[0].textContent = translations[lang].blogCategory;
    document.getElementById('newsletterHeading').textContent = translations[lang].newsletterHeading;
    document.getElementById('newsletterText').textContent = translations[lang].newsletterText;
    document.getElementById('newsletterButton').textContent = translations[lang].newsletterButton;
}

// Lógica de Filtros e Busca (Projetos)
const projectSearch = document.getElementById('projectSearch');
const projectCategory = document.getElementById('projectCategory');
const projectList = document.querySelector('.project-list');
const projectCards = projectList.querySelectorAll('.card');

function filterProjects() {
    const searchTerm = projectSearch.value.toLowerCase();
    const category = projectCategory.value;

    projectCards.forEach(card => {
        const title = card.dataset.title.toLowerCase();
        const cardCategory = card.dataset.category;
        
        const matchesSearch = title.includes(searchTerm);
        const matchesCategory = category === 'all' || category === cardCategory;
        
        if (matchesSearch && matchesCategory) {
            card.style.display = 'flex';
        } else {
            card.style.display = 'none';
        }
    });
}

projectSearch.addEventListener('input', filterProjects);
projectCategory.addEventListener('change', filterProjects);

// Lógica de Filtros e Busca (Blog)
const blogSearch = document.getElementById('blogSearch');
const blogCategory = document.getElementById('blogCategory');
const blogList = document.querySelector('.blog-list');
const blogCards = blogList.querySelectorAll('.card');

function filterBlog() {
    const searchTerm = blogSearch.value.toLowerCase();
    const category = blogCategory.value;

    blogCards.forEach(card => {
        const title = card.dataset.title.toLowerCase();
        const cardCategory = card.dataset.category;
        
        const matchesSearch = title.includes(searchTerm);
        const matchesCategory = category === 'all' || category === cardCategory;
        
        if (matchesSearch && matchesCategory) {
            card.style.display = 'flex';
        } else {
            card.style.display = 'none';
        }
    });
}

blogSearch.addEventListener('input', filterBlog);
blogCategory.addEventListener('change', filterBlog);