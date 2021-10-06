<?php include('header.php')?>
<link rel="stylesheet" href="./css/complaint_tickets.css">
<title>Complaints</title>
<div class="container">
    <div class="small_container">
        <div class="heading_dash">
            <h1 class="mainHeadingDash">Complaint Tickets</h1>
            <p class="mainParaDash">Raise an issue or check for updates on previous issues</p>
            <span><strong>Monday,</strong> 18th May, 2020</span>
        </div>
        <div class="ticket-select-options-div-complaint_tickets">
            <div class="row-recruiter">
            <span>
                <label for="ticket_type_label_complaint_tickets" class="ticket_type_label_complaint_tickets_label">Ticket Type</label>
                <div class="ticket-after-div-select-element">
                    <select name="" id="ticket_type_label_complaint_tickets">
                    <option value="0">All tickets</option>
                        <option value="1">Complaint</option>
                        <option value="2">Feedback</option>
                        <option value="3">Query</option>
                        <option value="4">Request</option>
                    </select>
                </div>
            </span>
            <span>
                <label for="ticket_type_label_complaint_tickets" class="ticket_type_label_complaint_tickets_label">Priority</label>
                <div class="ticket-after-div-select-element">
                <select name="" id="ticket_type_label_complaint_tickets">
                    <option value="0">Select all</option>
                    <option value="1">High</option>
                    <option value="2">Medium</option>
                    <option value="3">Low</option>
                </select>
                </div>
            </span>       
            <button class="create-ticket-button-for-complaints-ticket">Create ticket +</button>
            </div>
        </div>
        <div class="ticket-categories-options-tochoose">
            <div class="row-recruiter">
                <p class="sub-ticket-categories-options-tochoose sub-ticket-categories-options-tochoose-recent active">Recent</p>
                <p class="sub-ticket-categories-options-tochoose sub-ticket-categories-options-tochoose-unassigned">Unassigned</p>
                <p class="sub-ticket-categories-options-tochoose sub-ticket-categories-options-tochoose-closed">Closed</p>
            </div>
        </div>
        <div class="recent-complaint-tickets-recruiter active complaint-tickets-recruiter-cards-div">
            <div class="complaint-card-recruiter-complaint-tickets">
                <div class="row-recruiter">
                    <span>
                        <p class="light-grey-text-complain-ticket complaint">Complaint</p>
                        <p class="black-text-ciomplaint-ticket-recruiter">05-05-2021</p>
                    </span>
                    <span class="row-recruiter">
                        <img src="./img/Ellipse -1.png" class="image-margin-right-complaint-ticket-recruiter">
                        <span>
                            <p  class="light-grey-text-complain-ticket">Added by</p>
                            <p class="black-text-ciomplaint-ticket-recruiter">Johne</p>
                        </span>
                    </span>
                    <span class="span-message-complaint-ticket-recruiter">
                            <p class="light-grey-text-complain-ticket">Message</p>
                            <p class="black-text-ciomplaint-ticket-recruiter">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd.</p>
                    </span>
                </div>
                <button class="delete-button-complaint-ticket-recruiter light-grey-text-complain-ticket">Delete <i class="fa fa-trash" aria-hidden="true" style="color:#EC4551"></i></button>
                <button class="reply-button-complaint-ticket-recruiter light-grey-text-complain-ticket">Reply <i class="fa fa-reply" aria-hidden="true" style="color:#51C46D"></i></button>
            </div>
            <div class="complaint-card-recruiter-complaint-tickets">
                <div class="row-recruiter">
                    <span>
                        <p class="light-grey-text-complain-ticket query">Query</p>
                        <p class="black-text-ciomplaint-ticket-recruiter">05-05-2021</p>
                    </span>
                    <span class="row-recruiter">
                        <img src="./img/Ellipse -1.png" class="image-margin-right-complaint-ticket-recruiter">
                        <span>
                            <p  class="light-grey-text-complain-ticket">Added by</p>
                            <p class="black-text-ciomplaint-ticket-recruiter">Johne</p>
                        </span>
                    </span>
                    <span class="span-message-complaint-ticket-recruiter">
                            <p class="light-grey-text-complain-ticket">Message</p>
                            <p class="black-text-ciomplaint-ticket-recruiter">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd.</p>
                    </span>
                </div>
                <button class="delete-button-complaint-ticket-recruiter light-grey-text-complain-ticket">Delete <i class="fa fa-trash" aria-hidden="true" style="color:#EC4551"></i></button>
                <button class="reply-button-complaint-ticket-recruiter light-grey-text-complain-ticket">Reply <i class="fa fa-reply" aria-hidden="true" style="color:#51C46D"></i></button>
            </div>
            <div class="complaint-card-recruiter-complaint-tickets">
                <div class="row-recruiter">
                    <span>
                        <p class="light-grey-text-complain-ticket feedback">Feedback</p>
                        <p class="black-text-ciomplaint-ticket-recruiter">05-05-2021</p>
                    </span>
                    <span class="row-recruiter">
                        <img src="./img/Ellipse -1.png" class="image-margin-right-complaint-ticket-recruiter">
                        <span>
                            <p  class="light-grey-text-complain-ticket">Added by</p>
                            <p class="black-text-ciomplaint-ticket-recruiter">Johne</p>
                        </span>
                    </span>
                    <span class="span-message-complaint-ticket-recruiter">
                            <p class="light-grey-text-complain-ticket">Message</p>
                            <p class="black-text-ciomplaint-ticket-recruiter">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd.</p>
                    </span>
                </div>
                <button class="delete-button-complaint-ticket-recruiter light-grey-text-complain-ticket">Delete <i class="fa fa-trash" aria-hidden="true" style="color:#EC4551"></i></button>
                <button class="reply-button-complaint-ticket-recruiter light-grey-text-complain-ticket">Reply <i class="fa fa-reply" aria-hidden="true" style="color:#51C46D"></i></button>
            </div>
            <div class="complaint-card-recruiter-complaint-tickets">
                <div class="row-recruiter">
                    <span>
                        <p class="light-grey-text-complain-ticket query">Query</p>
                        <p class="black-text-ciomplaint-ticket-recruiter">05-05-2021</p>
                    </span>
                    <span class="row-recruiter">
                        <img src="./img/Ellipse -1.png" class="image-margin-right-complaint-ticket-recruiter">
                        <span>
                            <p  class="light-grey-text-complain-ticket">Added by</p>
                            <p class="black-text-ciomplaint-ticket-recruiter">Johne</p>
                        </span>
                    </span>
                    <span class="span-message-complaint-ticket-recruiter">
                            <p class="light-grey-text-complain-ticket">Message</p>
                            <p class="black-text-ciomplaint-ticket-recruiter">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd.</p>
                    </span>
                </div>
                <button class="delete-button-complaint-ticket-recruiter light-grey-text-complain-ticket">Delete <i class="fa fa-trash" aria-hidden="true" style="color:#EC4551"></i></button>
                <button class="reply-button-complaint-ticket-recruiter light-grey-text-complain-ticket">Reply <i class="fa fa-reply" aria-hidden="true" style="color:#51C46D"></i></button>
            </div>
        </div>
        <div class="unassigned-complaint-tickets-recruiter complaint-tickets-recruiter-cards-div">
            <div class="complaint-card-recruiter-complaint-tickets">
                <div class="row-recruiter">
                    <span>
                        <p class="light-grey-text-complain-ticket complaint">Complaint</p>
                        <p class="black-text-ciomplaint-ticket-recruiter">05-05-2021</p>
                    </span>
                    <span class="row-recruiter">
                        <img src="./img/Ellipse -1.png" class="image-margin-right-complaint-ticket-recruiter">
                        <span>
                            <p  class="light-grey-text-complain-ticket">Added by</p>
                            <p class="black-text-ciomplaint-ticket-recruiter">Johne</p>
                        </span>
                    </span>
                    <span class="span-message-complaint-ticket-recruiter">
                            <p class="light-grey-text-complain-ticket">Message</p>
                            <p class="black-text-ciomplaint-ticket-recruiter">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd.</p>
                    </span>
                </div>
                <button class="delete-button-complaint-ticket-recruiter light-grey-text-complain-ticket">Delete <i class="fa fa-trash" aria-hidden="true" style="color:#EC4551"></i></button>
                <button class="reply-button-complaint-ticket-recruiter light-grey-text-complain-ticket">Reply <i class="fa fa-reply" aria-hidden="true" style="color:#51C46D"></i></button>
            </div>
            <div class="complaint-card-recruiter-complaint-tickets">
                <div class="row-recruiter">
                    <span>
                        <p class="light-grey-text-complain-ticket query">Query</p>
                        <p class="black-text-ciomplaint-ticket-recruiter">05-05-2021</p>
                    </span>
                    <span class="row-recruiter">
                        <img src="./img/Ellipse -1.png" class="image-margin-right-complaint-ticket-recruiter">
                        <span>
                            <p  class="light-grey-text-complain-ticket">Added by</p>
                            <p class="black-text-ciomplaint-ticket-recruiter">Johne</p>
                        </span>
                    </span>
                    <span class="span-message-complaint-ticket-recruiter">
                            <p class="light-grey-text-complain-ticket">Message</p>
                            <p class="black-text-ciomplaint-ticket-recruiter">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd.</p>
                    </span>
                </div>
                <button class="delete-button-complaint-ticket-recruiter light-grey-text-complain-ticket">Delete <i class="fa fa-trash" aria-hidden="true" style="color:#EC4551"></i></button>
                <button class="reply-button-complaint-ticket-recruiter light-grey-text-complain-ticket">Reply <i class="fa fa-reply" aria-hidden="true" style="color:#51C46D"></i></button>
            </div>
            <div class="complaint-card-recruiter-complaint-tickets">
                <div class="row-recruiter">
                    <span>
                        <p class="light-grey-text-complain-ticket feedback">Feedback</p>
                        <p class="black-text-ciomplaint-ticket-recruiter">05-05-2021</p>
                    </span>
                    <span class="row-recruiter">
                        <img src="./img/Ellipse -1.png" class="image-margin-right-complaint-ticket-recruiter">
                        <span>
                            <p  class="light-grey-text-complain-ticket">Added by</p>
                            <p class="black-text-ciomplaint-ticket-recruiter">Johne</p>
                        </span>
                    </span>
                    <span class="span-message-complaint-ticket-recruiter">
                            <p class="light-grey-text-complain-ticket">Message</p>
                            <p class="black-text-ciomplaint-ticket-recruiter">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd.</p>
                    </span>
                </div>
                <button class="delete-button-complaint-ticket-recruiter light-grey-text-complain-ticket">Delete <i class="fa fa-trash" aria-hidden="true" style="color:#EC4551"></i></button>
                <button class="reply-button-complaint-ticket-recruiter light-grey-text-complain-ticket">Reply <i class="fa fa-reply" aria-hidden="true" style="color:#51C46D"></i></button>
            </div>
            <div class="complaint-card-recruiter-complaint-tickets">
                <div class="row-recruiter">
                    <span>
                        <p class="light-grey-text-complain-ticket query">Query</p>
                        <p class="black-text-ciomplaint-ticket-recruiter">05-05-2021</p>
                    </span>
                    <span class="row-recruiter">
                        <img src="./img/Ellipse -1.png" class="image-margin-right-complaint-ticket-recruiter">
                        <span>
                            <p  class="light-grey-text-complain-ticket">Added by</p>
                            <p class="black-text-ciomplaint-ticket-recruiter">Johne</p>
                        </span>
                    </span>
                    <span class="span-message-complaint-ticket-recruiter">
                            <p class="light-grey-text-complain-ticket">Message</p>
                            <p class="black-text-ciomplaint-ticket-recruiter">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd.</p>
                    </span>
                </div>
                <button class="delete-button-complaint-ticket-recruiter light-grey-text-complain-ticket">Delete <i class="fa fa-trash" aria-hidden="true" style="color:#EC4551"></i></button>
                <button class="reply-button-complaint-ticket-recruiter light-grey-text-complain-ticket">Reply <i class="fa fa-reply" aria-hidden="true" style="color:#51C46D"></i></button>
            </div>
        </div>
        <div class="closed-complaint-tickets-recruiter complaint-tickets-recruiter-cards-div">
            <div class="complaint-card-recruiter-complaint-tickets">
                <div class="row-recruiter">
                    <span>
                        <p class="light-grey-text-complain-ticket complaint">Complaint</p>
                        <p class="black-text-ciomplaint-ticket-recruiter">05-05-2021</p>
                    </span>
                    <span class="row-recruiter">
                        <img src="./img/Ellipse -1.png" class="image-margin-right-complaint-ticket-recruiter">
                        <span>
                            <p  class="light-grey-text-complain-ticket">Added by</p>
                            <p class="black-text-ciomplaint-ticket-recruiter">Johne</p>
                        </span>
                    </span>
                    <span class="span-message-complaint-ticket-recruiter">
                            <p class="light-grey-text-complain-ticket">Message</p>
                            <p class="black-text-ciomplaint-ticket-recruiter">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd.</p>
                    </span>
                </div>
                <button class="delete-button-complaint-ticket-recruiter light-grey-text-complain-ticket">Delete <i class="fa fa-trash" aria-hidden="true" style="color:#EC4551"></i></button>
                <button class="reply-button-complaint-ticket-recruiter light-grey-text-complain-ticket">Reply <i class="fa fa-reply" aria-hidden="true" style="color:#51C46D"></i></button>
            </div>
            <div class="complaint-card-recruiter-complaint-tickets">
                <div class="row-recruiter">
                    <span>
                        <p class="light-grey-text-complain-ticket query">Query</p>
                        <p class="black-text-ciomplaint-ticket-recruiter">05-05-2021</p>
                    </span>
                    <span class="row-recruiter">
                        <img src="./img/Ellipse -1.png" class="image-margin-right-complaint-ticket-recruiter">
                        <span>
                            <p  class="light-grey-text-complain-ticket">Added by</p>
                            <p class="black-text-ciomplaint-ticket-recruiter">Johne</p>
                        </span>
                    </span>
                    <span class="span-message-complaint-ticket-recruiter">
                            <p class="light-grey-text-complain-ticket">Message</p>
                            <p class="black-text-ciomplaint-ticket-recruiter">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd.</p>
                    </span>
                </div>
                <button class="delete-button-complaint-ticket-recruiter light-grey-text-complain-ticket">Delete <i class="fa fa-trash" aria-hidden="true" style="color:#EC4551"></i></button>
                <button class="reply-button-complaint-ticket-recruiter light-grey-text-complain-ticket">Reply <i class="fa fa-reply" aria-hidden="true" style="color:#51C46D"></i></button>
            </div>
            <div class="complaint-card-recruiter-complaint-tickets">
                <div class="row-recruiter">
                    <span>
                        <p class="light-grey-text-complain-ticket feedback">Feedback</p>
                        <p class="black-text-ciomplaint-ticket-recruiter">05-05-2021</p>
                    </span>
                    <span class="row-recruiter">
                        <img src="./img/Ellipse -1.png" class="image-margin-right-complaint-ticket-recruiter">
                        <span>
                            <p  class="light-grey-text-complain-ticket">Added by</p>
                            <p class="black-text-ciomplaint-ticket-recruiter">Johne</p>
                        </span>
                    </span>
                    <span class="span-message-complaint-ticket-recruiter">
                            <p class="light-grey-text-complain-ticket">Message</p>
                            <p class="black-text-ciomplaint-ticket-recruiter">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd.</p>
                    </span>
                </div>
                <button class="delete-button-complaint-ticket-recruiter light-grey-text-complain-ticket">Delete <i class="fa fa-trash" aria-hidden="true" style="color:#EC4551"></i></button>
                <button class="reply-button-complaint-ticket-recruiter light-grey-text-complain-ticket">Reply <i class="fa fa-reply" aria-hidden="true" style="color:#51C46D"></i></button>
            </div>
            <div class="complaint-card-recruiter-complaint-tickets">
                <div class="row-recruiter">
                    <span>
                        <p class="light-grey-text-complain-ticket query">Query</p>
                        <p class="black-text-ciomplaint-ticket-recruiter">05-05-2021</p>
                    </span>
                    <span class="row-recruiter">
                        <img src="./img/Ellipse -1.png" class="image-margin-right-complaint-ticket-recruiter">
                        <span>
                            <p  class="light-grey-text-complain-ticket">Added by</p>
                            <p class="black-text-ciomplaint-ticket-recruiter">Johne</p>
                        </span>
                    </span>
                    <span class="span-message-complaint-ticket-recruiter">
                            <p class="light-grey-text-complain-ticket">Message</p>
                            <p class="black-text-ciomplaint-ticket-recruiter">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd.</p>
                    </span>
                </div>
                <button class="delete-button-complaint-ticket-recruiter light-grey-text-complain-ticket">Delete <i class="fa fa-trash" aria-hidden="true" style="color:#EC4551"></i></button>
                <button class="reply-button-complaint-ticket-recruiter light-grey-text-complain-ticket">Reply <i class="fa fa-reply" aria-hidden="true" style="color:#51C46D"></i></button>
            </div>
        </div>
    </div>
</div>
<div class="create-ticket-recruiter-ekam">
    <form action="includes/ticket.php" method="post">
        <p class="name-for-form-create-ticket-recruiter-ekam">Create ticket</p>
        <br>
        <div class="row-recruiter create-ticket-main-recruiter-complaints">
            <div class="create-ticket-subTicket-recruiter">
                <span>
                    <label for="name-input-complaint-tickets-recruiter">Name *</label>
                    <input type="text" id="name-input-complaint-tickets-recruiter" placeholder="Recruiter name" name="name">
                </span>
                <span class="span-section-for-email-andlabels-complaints">
                    <label for="Email-input-complaint-tickets-recruiter">Email *</label>
                    <input type="text" id="Email-input-complaint-tickets-recruiter" name="email" placeholder="Enter the associated email address">
                </span>
                <span  class="span-section-for-email-andlabels-complaints">
                    <label for="Subject-input-complaint-tickets-recruiter">Subject *</label>
                    <input type="text" id="Subject-input-complaint-tickets-recruiter" name="subject" placeholder="Subject">
                </span>
            </div>
            <span class="create-ticket-subTicket-recruiter-2">
                <label for="message-input-complaint-tickets-recruiter">Message *</label>
                <textarea placeholder="Enter your message here" name="message" id="message-input-complaint-tickets-recruiter"></textarea>
            </span>
        </div>
    
        
        <div class="row-recruiter select-options-for-complaint-tickets">
            <span>
                <label for="options-input-complaint-tickets-recruiter">Subject *</label>
                <div class="row-recruiter" style="justify-content:space-around;" name="priority">
                    <div class="row-recruiter" style="margin-right:35px"><input type="radio" name="priority" style="margin-right:8px" id="options-input-complaint-tickets-recruiter-1"> <label for="options-input-complaint-tickets-recruiter-1" value="high">High</label></div>
                    <div class="row-recruiter" style="margin-right:35px"><input type="radio" name="priority" style="margin-right:8px" id="options-input-complaint-tickets-recruiter-2"> <label for="options-input-complaint-tickets-recruiter-2" value="medium">Medium</label></div>
                    <div class="row-recruiter" style="margin-right:35px"><input type="radio" name="priority" style="margin-right:8px" id="options-input-complaint-tickets-recruiter-3"> <label for="options-input-complaint-tickets-recruiter-3" vaue="low">Low</label></div>
                </div>
            </span>
            <span style="width:45%" >
            <label for="complaint-type-input-complaint-tickets-recruiter">Ticket type*</label>
            <select id="complaint-type-input-complaint-tickets-recruiter" name="tickettype">
                <option value="Complaint">Complaint</option>
                <option value="Feedback">Feedback</option>
                <option value="Query">Query</option>
                <option value="Request">Request</option>
            </select>
            </span>
        </div>
        <span class="button-complaints-recruiter-complaints">
            <input type="button" class="close-button-for-dialog-box-create-tickets" value="Close"></input>
            <button type="submit" name="submit">Submit</button>
        </span>
    </form>
</div>
<script src="./js/complaint_tickets.js"></script>