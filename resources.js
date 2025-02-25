document.addEventListener('DOMContentLoaded', function () {
    const resources = [

        // Put website links here
        { type: 'website', title: 'Learn CSS', url: 'https://www.strath.ac.uk/studywithus/internationalstudents/whileyourehere/internationalstudentsupportteam/ ' },
        { type: 'website', title: 'Learn CSS', url: 'https://ukcisa.org.uk/Information--Advice/Studying--living-in-the-UK/Mental-health-support-in-the-UK ' },
        { type: 'website', title: 'Learn CSS', url: 'https://www.ncbi.nlm.nih.gov/pmc/articles/PMC10882177/' },
        { type: 'website', title: 'Learn CSS', url: 'https://www.ncbi.nlm.nih.gov/pmc/articles/PMC10882177/' },
        { type: 'website', title: 'Learn CSS', url: 'https://global.ed.ac.uk/transitions-and-mentoring-toolkit/transitions-toolkit/transitions-for-wellbeing/mental-health-and-international-students ' },

        // Put video links here 
        { type: 'video', title: 'Introduction to HTML', url: 'https://www.youtube.com/embed/dD2EISBDjWM' },
        { type: 'video', title: 'JavaScript Tutorial', url: 'https://www.youtube.com/embed/WCBbssfVRFg?si=F9B8piclmS7rk31M' },
        { type: 'video', title: 'Introduction to HTML', url: 'https://www.youtube.com/embed/dD2EISBDjWM' },
        { type: 'video', title: 'JavaScript Tutorial', url: 'https://www.youtube.com/embed/WCBbssfVRFg?si=F9B8piclmS7rk31M' },
        { type: 'video', title: 'Introduction to HTML', url: 'https://www.youtube.com/embed/dD2EISBDjWM' },
        { type: 'video', title: 'JavaScript Tutorial', url: 'https://www.youtube.com/embed/WCBbssfVRFg?si=F9B8piclmS7rk31M' },

    ];

    function displayResources(filter) {
        const container = document.getElementById('resourceContainer');
        container.innerHTML = '';
        resources.filter(r => filter === 'all' || r.type === filter).forEach(resource => {
            const card = document.createElement('div');
            card.className = `resource-card ${resource.type}`;
            if (resource.type === 'video') {
                card.innerHTML = `<h4>${resource.title}</h4><iframe src="${resource.url}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`;
            } else if (resource.type === 'website') {
                card.innerHTML = `<h4>${resource.title}</h4><a href="${resource.url}" target="_blank">Visit Website</a>`;
            }
            container.appendChild(card);
        });
    }

    function filterResources(type) {
        displayResources(type);
    }

    window.filterResources = filterResources;
    displayResources('all');
});