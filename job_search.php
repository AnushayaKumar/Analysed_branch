<?php include('include/header.php')?>
<link rel="stylesheet" href="./css/job_search.css">
<title>Search Jobs</title>
<div class="container">
    <div class="small_container" style="margin-left:50px">
        <div class="heading_dash">
            <h1 class="mainHeadingDash">Search</h1>
            <p class="val1">Search for jobs, candidates, clients and more</p>
        </div>
        <div class="main_searchJobs_container">
            <ul class="searchJobs_list">
                <li class="searchJobs_listItem active" id="jobs_searchListItem">Jobs</li>
                <li class="searchJobs_listItem" id="candidates_searchListItem">Candidates</li>
                <li class="searchJobs_listItem" id="Clients_searchListItem">Clients</li>
                <li class="searchJobs_listItem" id="Contacts_searchListItem">Contacts</li>
                <li class="searchJobs_listItem" id="Tags_searchListItem">Tags</li>
            </ul>
            <div class="searchBar_section_searchJobs">
                <input type="text" class="input_for_Search_searchJobs" placeholder="Search for job role / position">
                <button class="searchButton_searchJobs"><i class="fa fa-search" aria-hidden="true"></i></button>
                <div class="recent_searches_div">
                    <p><i class="fa fa-refresh" aria-hidden="true"></i> Recent Searches </p>
                    <span> Fox hunt</span>
                    <span>Angular.js Development</span>
                </div>
                <span class="advancedSearch_text">Advanced Search <i class="fa fa-arrow-right" aria-hidden="true"></i></span>
            </div>
            <div class="tags_div_searchJobs">
                <section class="upper_cta_tags_div_searchJobs">
                    <span>Available Tags</span>
                    <button>Apply</button>
                </section>
                <div class="jobs_radioButton_tags_div_searchJobs radioButtons_div_searchJobs">
                    <p>Jobs</p>
                    <br>
                    <span><input type="checkbox" class="checkbox_tags_searchJobs" name="" id="jobs_Radio1"><label for="jobs_Radio1" id="y5">Lorem ipsum.</label></span>
                    <span><input type="checkbox" class="checkbox_tags_searchJobs" name="" id="jobs_Radio2"><label for="jobs_Radio2" id="y5">Lorem ipsum.</label></span>
                    <span><input type="checkbox" class="checkbox_tags_searchJobs" name="" id="jobs_Radio3"><label for="jobs_Radio3" id="y5">Lorem ipsum.</label></span>
                    <span><input type="checkbox" class="checkbox_tags_searchJobs" name="" id="jobs_Radio4"><label for="jobs_Radio4" id="y5">Lorem ipsum.</label></span>
                    <span><input type="checkbox" class="checkbox_tags_searchJobs" name="" id="jobs_Radio5"><label for="jobs_Radio5" id="y5">Lorem ipsum.</label></span>
                    <span><input type="checkbox" class="checkbox_tags_searchJobs" name="" id="jobs_Radio6"><label for="jobs_Radio6" id="y5">Lorem ipsum.</label></span>
                </div>
                
                <div class="candidates_radioButton_tags_div_searchJobs radioButtons_div_searchJobs">
                    <br>
                <p>Candiates</p>    
                    <br>
                    <span><input type="checkbox" class="checkbox_tags_searchJobs" name="" id="candidates_Radio1"><label for="candidates_Radio1" id="y5">Lorem ipsum.</label></span>
                    <span><input type="checkbox" class="checkbox_tags_searchJobs" name="" id="candidates_Radio2"><label for="candidates_Radio2" id="y5">Lorem ipsum.</label></span>
                    <span><input type="checkbox" class="checkbox_tags_searchJobs" name="" id="candidates_Radio3"><label for="candidates_Radio3" id="y5">Lorem ipsum.</label></span>
                    <span><input type="checkbox" class="checkbox_tags_searchJobs" name="" id="candidates_Radio4"><label for="candidates_Radio4" id="y5">Lorem ipsum.</label></span>
                    <span><input type="checkbox" class="checkbox_tags_searchJobs" name="" id="candidates_Radio5"><label for="candidates_Radio5" id="y5">Lorem ipsum.</label></span>
                </div>
                <div class="clients_radioButton_tags_div_searchJobs radioButtons_div_searchJobs">
                    <br>
                <p>Clients</p> 
                <br>      
                    <span><input type="checkbox" class="checkbox_tags_searchJobs" name="" id="clients_Radio1"><label for="clients_Radio1" id="y5">Lorem ipsum.</label></span>
                    <span><input type="checkbox" class="checkbox_tags_searchJobs" name="" id="clients_Radio2"><label for="clients_Radio2" id="y5">Lorem ipsum.</label></span>
                    <span><input type="checkbox" class="checkbox_tags_searchJobs" name="" id="clients_Radio3"><label for="clients_Radio3" id="y5">Lorem ipsum.</label></span>
                </div>
                <div class="contacts_radioButton_tags_div_searchJobs radioButtons_div_searchJobs">
                    <br>
                <p>Contacts</p>      
                <br>  
                    <span><input type="checkbox" class="checkbox_tags_searchJobs" name="" id="contacts_Radio1"><label for="contacts_Radio1" id="y5">Lorem ipsum.</label></span>
                    <span><input type="checkbox" class="checkbox_tags_searchJobs" name="" id="contacts_Radio2"><label for="contacts_Radio2" id="y5">Lorem ipsum.</label></span>
                    <span><input type="checkbox" class="checkbox_tags_searchJobs" name="" id="contacts_Radio3"><label for="contacts_Radio3" id="y5">Lorem ipsum.</label></span>
                    <span><input type="checkbox" class="checkbox_tags_searchJobs" name="" id="contacts_Radio4"><label for="contacts_Radio4" id="y5">Lorem ipsum.</label></span>
                    <span><input type="checkbox" class="checkbox_tags_searchJobs" name="" id="contacts_Radio5"><label for="contacts_Radio5" id="y5">Lorem ipsum.</label></span>
                </div>
            </div>

            <section class="filter_for_searchJobs">
                <div class="jobs_filter_area filter_div_searchJobs">
                    <div class="flex-direction-column-searchJobs">
                        <p class="y2">Filters 
                        <img src="img/filter_list-24px.svg" height="17" width="23"  />
                        <!-- <i class="fa fa-filter" aria-hidden="true"></i> -->
                        </p>
                        <select name="" id="" class="status_select_for_searchJobs">
                            <option value="0" class="status_options_for_searchJobs">Status</option>
                            <option value="1" class="status_options_for_searchJobs">Open</option>
                            <option value="2" class="status_options_for_searchJobs">Closed</option>
                        </select>
                        <select name="" id="" class="type_select_for_searchJobs">
                        <option value="0" class="status_options_for_searchJobs">Type</option>
                            <option value="1" class="type_options_for_searchJobs">Open</option>
                            <option value="2" class="type_options_for_searchJobs">Closed</option>
                        </select>
                        <select name="" id="" class="qualifications_select_for_searchJobs">
                        <option value="0" class="status_options_for_searchJobs">Qualification</option>
                            <option value="1" class="qualifications_options_for_searchJobs">Open</option>
                            <option value="2" class="qualifications_options_for_searchJobs">Closed</option>
                        </select>
                        <input type="text" name="" placeholder="Number of openings" id="y1">
                        <section class="y2">
                            <p>Add Skills <span style="color: #3598db;">+</span></p>
                            <div class="chip">
                                PHP <span class="close">&nbsp;&times;</span>
                                </div>
                                <div class="chip">
                                MySQL<span class="close">&nbsp;&times;</span>
                                </div>
                        </section>
                        <section class="y2">
                        <p>Add Company <span style="color: #3598db;">+</span></p>
                                <div class="chip">
                                Fox Hunt <span class="close">&nbsp;&times;</span>
                                </div>
                                <div class="chip">
                                E.A.R.T.H<span class="close">&nbsp;&times;</span>
                                </div>
                                <div class="chip">
                                Trello<span class="close">&nbsp;&times;</span>
                                </div>
                        </section>
                    </div>
                </div>
                <div class="candidates_filter_area filter_div_searchJobs">
                    <div class="flex-direction-column-searchJobs">
                        <p class="filter_heading">Filters <img src="img/filter_list-24px.svg" height="17" width="23"  /></p>
                            <select name="" id="" class="status_select_for_searchJobs">
                                <option value="0" class="status_options_for_searchJobs">Status</option>
                                <option value="1" class="status_options_for_searchJobs">Open </option>
                                <option value="2" class="status_options_for_searchJobs">Closed</option>
                            </select>
                            <select name="" id="" class="type_select_for_searchJobs">
                            <option value="0" class="status_options_for_searchJobs">Type</option>
                                <option value="1" class="type_options_for_searchJobs">Open</option>
                                <option value="2" class="type_options_for_searchJobs">Closed</option>
                            </select>
                            <select name="" id="" class="country_select_for_searchJobs">
                            <option value="0" class="status_options_for_searchJobs">India</option>
                                <option value="1" class="country_options_for_searchJobs">India</option>
                                <option value="2" class="country_options_for_searchJobs">China</option>
                            </select>
                            <select name="" id="" class="state_select_for_searchJobs">
                                <option value="0" class="state_options_for_searchJobs">Andhra Pradesh</option>
                                <option value="1" class="state_options_for_searchJobs">U.P</option>
                            </select>
                            <select name="" id="" class="city_select_for_searchJobs">
                                <option value="0" class="city_options_for_searchJobs">Vishakhapatnam</option>
                                <option value="1" class="city_options_for_searchJobs">U.P</option>
                            </select>
                            <section class="y2">
                            <p>Add Qualifications <span style="color: #3598db;">+</span></p>
                            <div class="chip">
                                B.Tech <span class="close">&nbsp;&times;</span>
                                </div>
                                <div class="chip">
                                MySQL<span class="close">&nbsp;&times;</span>
                                </div>
                        </section>
                        <section class="y2">
                        <p>Add Company <span style="color: #3598db;">+</span></p>
                                <div class="chip">
                                Fox Hunt <span class="close">&nbsp;&times;</span>
                                </div>
                                <div class="chip">
                                E.A.R.T.H<span class="close">&nbsp;&times;</span>
                                </div>
                                <div class="chip">
                                Trello<span class="close">&nbsp;&times;</span>
                                </div>
                        </section>
                            
                        </div>
                </div>
                <div class="clients_filter_area filter_div_searchJobs">
                    <div class="flex-direction-column-searchJobs">        
                        <p class="filter_heading">Filters <img src="img/filter_list-24px.svg" height="17" width="23"  /></p>
                            <select name="" id="" class="status_select_for_searchJobs">
                            <option value="0" class="status_options_for_searchJobs">Status</option>
                                <option value="1" class="status_options_for_searchJobs">Open</option>
                                <option value="2" class="status_options_for_searchJobs">Closed</option>
                            </select>
                            <select name="" id="" class="country_select_for_searchJobs">
                                <option value="1" class="country_options_for_searchJobs">India</option>
                                <option value="2" class="country_options_for_searchJobs">China</option>
                            </select>
                            <select name="" id="" class="state_select_for_searchJobs">
                                <option value="1" class="state_options_for_searchJobs">Andhra Pradesh</option>
                                <option value="2" class="state_options_for_searchJobs">U.P</option>
                            </select>
                            <select name="" id="" class="city_select_for_searchJobs">
                                <option value="1" class="city_options_for_searchJobs">Vishakhapatnam</option>
                                <option value="2" class="city_options_for_searchJobs">U.P</option>
                            </select>
                            <section class="y2">
                            <p>Add Industry <span style="color: #3598db;">+</span></p>
                            <div class="chip">
                                IT <span class="close">&nbsp;&times;</span>
                                </div>
                        </section>
                        </div>
                </div>
                <div class="contacts_filter_area filter_div_searchJobs">
                    <div class="flex-direction-column-searchJobs">
                        <p class="filter_heading">Filters <img src="img/filter_list-24px.svg" height="17" width="23"  /></p>
                            <select name="" id="" class="status_select_for_searchJobs">
                            <option value="0" class="status_options_for_searchJobs">Status</option>
                                <option value="1" class="status_options_for_searchJobs">Open</option>
                                <option value="2" class="status_options_for_searchJobs">Closed</option>
                            </select>
                            <select name="" id="" class="internal_select_for_searchJobs" style="color:#3598DB;">
                                <option value="1" class="status_options_for_searchJobs">Internal</option>
                                <option value="2" class="status_options_for_searchJobs">Closed</option>
                            </select>
                            <select name="" id="" class="systemVerified_select_for_searchJobs" style="color:#3598DB;">
                                <option value="1" class="status_options_for_searchJobs">System Verified</option>
                                <option value="2" class="status_options_for_searchJobs">Closed</option>
                            </select>
                            
                            <select name="" id="" class="country_select_for_searchJobs">
                                <option value="1" class="country_options_for_searchJobs">India</option>
                                <option value="2" class="country_options_for_searchJobs">China</option>
                            </select>
                            <select name="" id="" class="state_select_for_searchJobs">
                                <option value="1" class="state_options_for_searchJobs">Andhra Pradesh</option>
                                <option value="2" class="state_options_for_searchJobs">U.P</option>
                            </select>
                            <select name="" id="" class="city_select_for_searchJobs">
                                <option value="1" class="city_options_for_searchJobs">Vishakhapatnam</option>
                                <option value="2" class="city_options_for_searchJobs">U.P</option>
                            </select>
                            <section class="y2">
                        <p>Add Company <span style="color: #3598db;">+</span></p>
                                <div class="chip">
                                Fox Hunt <span class="close">&nbsp;&times;</span>
                                </div>
                                <div class="chip">
                                E.A.R.T.H<span class="close">&nbsp;&times;</span>
                                </div>
                                <div class="chip">
                                Trello<span class="close">&nbsp;&times;</span>
                                </div>
                        </section>
                        </div>
                </div>
            </section>
            
        </div>
    </div>
</div>

<script src="./js/job_search.js"></script>