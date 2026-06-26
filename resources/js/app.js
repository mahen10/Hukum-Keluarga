// Hukum Keluarga Indonesia - Client-side Interactive Logic

document.addEventListener('DOMContentLoaded', () => {
    // 1. Mobile Menu Toggle
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            mobileMenu.classList.toggle('flex');
            
            // Toggle icon path if SVG exists
            const isExpanded = !mobileMenu.classList.contains('hidden');
            mobileMenuBtn.setAttribute('aria-expanded', isExpanded.toString());
        });

        // Close menu when clicking links
        const mobileLinks = mobileMenu.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                mobileMenu.classList.remove('flex');
            });
        });
    }

    // 2. FAQ Accordion Logic
    const faqItems = document.querySelectorAll('.accordion-item');
    faqItems.forEach(item => {
        const button = item.querySelector('.accordion-trigger');
        const content = item.querySelector('.accordion-content');
        
        if (button && content) {
            button.addEventListener('click', () => {
                const isActive = item.classList.contains('active');
                
                // Close all other items
                faqItems.forEach(otherItem => {
                    otherItem.classList.remove('active');
                    const otherContent = otherItem.querySelector('.accordion-content');
                    if (otherContent) {
                        otherContent.style.maxHeight = null;
                        otherContent.style.paddingTop = null;
                        otherContent.style.paddingBottom = null;
                    }
                });

                // Toggle current item
                if (!isActive) {
                    item.classList.add('active');
                    content.style.maxHeight = content.scrollHeight + "px";
                    content.style.paddingTop = "1rem";
                    content.style.paddingBottom = "1rem";
                } else {
                    item.classList.remove('active');
                    content.style.maxHeight = null;
                    content.style.paddingTop = null;
                    content.style.paddingBottom = null;
                }
            });
        }
    });

    // 3. Article Category and Search Filters (Runs on artikel.html)
    const filterButtons = document.querySelectorAll('.filter-btn');
    const articleCards = document.querySelectorAll('.article-card');
    const articleSearchInput = document.getElementById('article-search');
    
    let activeCategory = 'semua';
    let searchQuery = '';

    function filterArticles() {
        let visibleCount = 0;
        const noResults = document.getElementById('no-articles-found');

        articleCards.forEach(card => {
            const category = card.getAttribute('data-category');
            const title = card.querySelector('h3').textContent.toLowerCase();
            const excerpt = card.querySelector('p').textContent.toLowerCase();
            
            const matchesCategory = activeCategory === 'semua' || category === activeCategory;
            const matchesSearch = title.includes(searchQuery) || excerpt.includes(searchQuery);

            if (matchesCategory && matchesSearch) {
                card.style.display = 'block';
                // Add fade in animation
                card.classList.add('fade-in', 'visible');
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });

        if (noResults) {
            if (visibleCount === 0) {
                noResults.classList.remove('hidden');
            } else {
                noResults.classList.add('hidden');
            }
        }
    }

    if (filterButtons.length > 0) {
        filterButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active class from all
                filterButtons.forEach(b => {
                    b.classList.remove('bg-accent', 'text-white');
                    b.classList.add('bg-gray-100', 'text-gray-700', 'hover:bg-gray-200');
                });
                
                // Add to current
                btn.classList.remove('bg-gray-100', 'text-gray-700', 'hover:bg-gray-200');
                btn.classList.add('bg-accent', 'text-white');
                
                activeCategory = btn.getAttribute('data-filter');
                filterArticles();
            });
        });
    }

    if (articleSearchInput) {
        articleSearchInput.addEventListener('input', (e) => {
            searchQuery = e.target.value.toLowerCase();
            filterArticles();
        });
    }

    // 4. Header Shadow / Background on Scroll
    const header = document.querySelector('header');
    if (header) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('bg-white/95', 'backdrop-blur-md', 'shadow-md');
                header.classList.remove('bg-white');
            } else {
                header.classList.remove('bg-white/95', 'backdrop-blur-md', 'shadow-md');
                header.classList.add('bg-white');
            }
        });
    }

    // 5. Scroll Reveal Animation
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                obs.unobserve(entry.target); // Only animate once
            }
        });
    }, observerOptions);

    const fadeElements = document.querySelectorAll('.fade-in');
    fadeElements.forEach(el => {
        observer.observe(el);
    });
});
