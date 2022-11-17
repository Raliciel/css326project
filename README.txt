# CLASSROOM RESERVATION WEBSITE

This repostory is a CSS326: DATABASE PROGRAMING LABORATORY mini project. We are focusing on how to design and create DBMS and apply it into HTML document files. In this project, we will create a website that an account can log into. If the account if an admin, they can add more account, course, room and section. If the account is an teacher, they can book a timetable to teach a subject in a room to a section of student. 

## Contributor

* Me (Bam): @Raliciel :pleading_face:
* Khang: @khangnkv
* Mickey: @Konlaban

## What to do?

Download this repos to your computer, edit the .php files as following checklist. Some of the script can be referenced and some of element will have example in the project's file. Website Roadmap is where I planned the user journey so try check it.

## Website Roadmap
```mermaid
graph TD;
    index.html-->adminprofile.php;
    adminprofile.php-->show_account.php;
    adminprofile.php-->show_course.php;
    adminprofile.php-->show_room.php;
    adminprofile.php-->show_section.php;
    show_account.php-->add_account.php;
    show_course.php-->add_course.php;
    show_room.php-->add_room.php;
    show_section.php-->add_section.php;
    add_account.php-->show_account.php;
    add_course.php-->show_course.php;
    add_room.php-->show_room.php;
    add_section.php-->show_section.php;
    adminprofile.php --> edit_profile.php;
    index.html --> teacherprofile.php;
    teacherprofile.php --> show_booking.php;
    show_booking.php --> add_booking.php;
    add_booking.php --> show_booking.php;
    teacherprofile.php --> edit_profile.php
```

## Checklist

anything with :pleading_face: will be in my care (cus I have cool feature to think of)

* **Initial things**
- [x] Make database
- [x] Make index.html
  - [x] Link index.html to database
- [X] Make Account Profile 
* **Admin side**
- [x] Make add_account.php
  - [x] Link add_account.php to database
  - [x] Make a page to show table of account from database and link it to database
- [x] Make add_room.php
  - [X] Link add_room.php to database
  - [X] Make a page to show table of room from database and link it to database
- [x] Make add_course.php
  - [X] Link add_course.php to database
  - [X] Make a page to show table of course from database and link it to database
- [x] Make add_section.php
  - [X] Link add_section.php to database
  - [X] Make a page to show table of section from database and link it to database
- [x] Create delete script
- [x] Create generate password script
- [x] Make uploading image show up
- [x] Cool CSS I took from class :pleading_face:
* **Teacher side**
- [ ] Make add_booking.php :pleading_face:
  - [ ] Link add_booking.php to database :pleading_face:
  - [ ] Make a page to show table of booking from database and link it to database :pleading_face:

## Deadline
 * **BIG PRESENTATION:** 25 NOVEMBER 2022
 * check everything before send: 18 NOVEMBER 2022
 * 50% needed: 11 NOVEMBER 2022

## Langauge and Tools

<p align="left"> <a href="https://www.w3schools.com/css/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original-wordmark.svg" alt="css3" width="40" height="40"/> </a> <a href="https://www.w3.org/html/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original-wordmark.svg" alt="html5" width="40" height="40"/> </a> <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-original.svg" alt="javascript" width="40" height="40"/> </a> <a href="https://www.php.net" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" alt="php" width="40" height="40"/> </a> </p>
