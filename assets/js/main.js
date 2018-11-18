const show = (selected) => {
    if (selected.length > 0) {
        selected = document.querySelector(selected);
        bookingBtn = document.querySelector('.booking-btn');
        selected.classList.add('showing');
        bookingBtn.style.display = 'none';
    }
}

const dateList = document.querySelectorAll('.date-list > li');
dateList.forEach(date => {
    date.addEventListener('click', (e) => {
        dateList.forEach(date => {
            date.classList.remove('active');
        });

        e.target.classList.add('active');
        // fetch data
    })
})

const hours = document.querySelectorAll('.hours');
hours.forEach(hour => {
    hour.addEventListener('click', (e) => {
        const classTarget = e.target.classList;
        classTarget.contains('selected') 
            ? classTarget.remove('selected') 
            : classTarget.add('selected');
    })
})

// const resume = document.querySelector('.resume');
// document.addEventListener('scroll', () => {
//     if (window.pageYOffset >= resume.offsetTop) {
//         resume.style = "position: fixed; top: 60px; right: 0;"
//     }
// })
