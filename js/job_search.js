const jobsItem = document.querySelector('#jobs_searchListItem');
const candidatesItem = document.querySelector('#candidates_searchListItem')
const clientItem = document.querySelector('#Clients_searchListItem')
const contactItem = document.querySelector('#Contacts_searchListItem')
const tagsItem = document.querySelector('#Tags_searchListItem')
const filterDivSearchJobs = document.querySelector('.filter_div_searchJobs')
const searchJobsList = document.querySelector('.searchJobs_listItem');


window.addEventListener('load', (event) => {
    document.querySelector('.jobs_filter_area').style.display='block'
    document.querySelector('.candidates_filter_area').style.display='none'
    document.querySelector('.clients_filter_area').style.display='none'
    document.querySelector('.contacts_filter_area').style.display='none'
});

document.querySelector('.input_for_Search_searchJobs').addEventListener('click',() =>{
    document.querySelector('.recent_searches_div').classList.toggle('active')
})
jobsItem.addEventListener('click',() =>{
    document.querySelector('.jobs_filter_area').style.display='block'
    document.querySelector('.candidates_filter_area').style.display='none'
    document.querySelector('.clients_filter_area').style.display='none'
    document.querySelector('.contacts_filter_area').style.display='none'
    jobsItem.classList.add('active');
    candidatesItem.classList.remove('active');
    clientItem.classList.remove('active');
    contactItem.classList.remove('active');
    tagsItem.classList.remove('active');
    document.querySelector('.tags_div_searchJobs').style.display ='none';
    document.querySelector('.searchBar_section_searchJobs').style.display ='block';
    document.querySelector('.filter_for_searchJobs').style.display ='block';
    document.querySelector('.input_for_Search_searchJobs').placeholder = 'Search for jobs';
})
candidatesItem.addEventListener('click',() =>{
    document.querySelector('.jobs_filter_area').style.display='none'
    document.querySelector('.candidates_filter_area').style.display='block'
    document.querySelector('.clients_filter_area').style.display='none'
    document.querySelector('.contacts_filter_area').style.display='none'
    jobsItem.classList.remove('active');
    candidatesItem.classList.add('active');
    clientItem.classList.remove('active');
    contactItem.classList.remove('active');
    tagsItem.classList.remove('active');
    document.querySelector('.tags_div_searchJobs').style.display ='none';
    document.querySelector('.searchBar_section_searchJobs').style.display ='block';
    document.querySelector('.filter_for_searchJobs').style.display ='block';
    document.querySelector('.input_for_Search_searchJobs').placeholder = 'Search for candidate by name';
})
clientItem.addEventListener('click',() =>{
    document.querySelector('.jobs_filter_area').style.display='none'
    document.querySelector('.candidates_filter_area').style.display='none'
    document.querySelector('.clients_filter_area').style.display='block'
    document.querySelector('.contacts_filter_area').style.display='none'
    jobsItem.classList.remove('active');
    candidatesItem.classList.remove('active');
    clientItem.classList.add('active');
    contactItem.classList.remove('active');
    tagsItem.classList.remove('active');
    document.querySelector('.tags_div_searchJobs').style.display ='none';
    document.querySelector('.searchBar_section_searchJobs').style.display ='block';
    document.querySelector('.filter_for_searchJobs').style.display ='block';
    document.querySelector('.input_for_Search_searchJobs').placeholder = 'Search for clients';
})
contactItem.addEventListener('click',() =>{
    document.querySelector('.jobs_filter_area').style.display='none'
    document.querySelector('.candidates_filter_area').style.display='none'
    document.querySelector('.clients_filter_area').style.display='none'
    document.querySelector('.contacts_filter_area').style.display='block'
    jobsItem.classList.remove('active');
    candidatesItem.classList.remove('active');
    clientItem.classList.remove('active');
    contactItem.classList.add('active');
    tagsItem.classList.remove('active');
    document.querySelector('.tags_div_searchJobs').style.display ='none';
    document.querySelector('.searchBar_section_searchJobs').style.display ='block';
    document.querySelector('.filter_for_searchJobs').style.display ='block';
    document.querySelector('.input_for_Search_searchJobs').placeholder = 'Search for company contacts';
})
tagsItem.addEventListener('click',() =>{
    jobsItem.classList.remove('active');
    candidatesItem.classList.remove('active');
    clientItem.classList.remove('active');
    contactItem.classList.remove('active');
    tagsItem.classList.add('active');
    document.querySelector('.tags_div_searchJobs').style.display ='block';
    document.querySelector('.searchBar_section_searchJobs').style.display ='none';
    document.querySelector('.filter_for_searchJobs').style.display ='none';

    
})