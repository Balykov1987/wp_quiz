//Основной файл работы опросника

document.addEventListener("DOMContentLoaded", function () {

    // RESET PLACEHOLDER INPUT ON CLICK START
    let form_input = document.querySelectorAll('.input_frm');
    if (form_input) {
        for (let i = 0; i < form_input.length; i++) {
            form_input[i].addEventListener('click', function () {
                let thisElement = this;

                let savePlaceholder = this.getAttribute('placeholder');

                this.setAttribute('placeholder', ' ');
                document.addEventListener('mouseup', function () {
                    thisElement.setAttribute('placeholder', savePlaceholder);
                });
            });
        }
    }
    // REST PLACEHOLDER INPUT ON CLICK THE END

    //QUIZ START
    let quiz_form = document.querySelector('.quiz_form');
    if (quiz_form) {
        let PrevBtn = quiz_form.querySelector('.btnPrev');
        let nextBtn = quiz_form.querySelector('.btnNext');
        let sendBtn = quiz_form.querySelector('.btn__send');
        let quizAll = quiz_form.querySelectorAll('.quiz_block');
        let currentQ = quiz_form.querySelector('.currentQ');
        let progressQ = quiz_form.querySelector('.progress');
        let progress = 0;
        let count = 0;
        let movingBtn =  document.querySelectorAll('.move');
        let progressPercent = Math.trunc(100 / (quizAll.length - 1));
        let progressNum = document.querySelector('.progress__num');

        let newVariable = document.getElementById('variables__blocks-new');
        let movingTo = document.getElementById('moving_to');
        let planning = document.getElementById('planning');
        let elevator = document.getElementById('elevator');
        let new_elevator = document.getElementById('new_elevator');
        let care = document.getElementById('care');
        let lastBlock = document.getElementById('last-block');


        //console.log(progressPercent)
        initProgress();
        removeBtn();
        changeText();
        addBtn();
        deleteClass();

        quiz_form.querySelector('.allQ').textContent = `${quizAll.length}`;

        nextBtn.addEventListener('click', function () {
            currentQ.textContent++;
           
            count++
            progress += Number(progressPercent.toFixed(2));
            //console.log(progress)
            initQuiz();
            initProgress();
            removeBtn();
            changeText();
            addBtn();
            upScroll();
            deleteClass(); 
            servicesWay();
        })
        
        sendBtn.addEventListener('click', function () {
            currentQ.textContent++;
            count++
            progress += Number(progressPercent.toFixed(2));
            //console.log(progress)
            servicesWay();
            initQuiz();
            initProgress();
            removeBtn();
            changeText();
            addBtn();
            //blockRemove();
        })

        PrevBtn.addEventListener('click', function () {
            count--
            currentQ.textContent--;
            progress -= Number(progressPercent.toFixed(2));
           // console.log(progress)
            initQuiz();
            initProgress();
            removeBtn();
            changeText();
            addBtn();
            servicesWay();
        })
        
        function initQuiz() {
            quizAll.forEach((element, i) => {
                element.classList.remove('active')
                if (i === count) {
                    element.classList.add('active')
                }
            })
        }

        function initProgress() {
            progressQ.style.width = `${progress}%`;
            
            progressNum.innerHTML = `${progress}%`;
        }

        function removeBtn() {
            if (count === 0) {
                PrevBtn.style.display = 'none'
            } else if (count !== 0) {
                PrevBtn.style.display = 'block'
            }
            if (count === quizAll.length - 1) {
                nextBtn.style.display = 'none'
                PrevBtn.style.display = 'none'
            } else if (count !== quizAll.length) {
                nextBtn.style.display = 'block'
            }  
        }

        function changeText() {
            let notice = document.querySelector('.notice');
            let block_notice = document.querySelector('.block__notice');
            if (count === 0) {
                nextBtn.textContent = 'GET your estimate!'
            } else {
                nextBtn.textContent = 'Next'
                notice.style.display = 'none'
                block_notice.style.position = 'absolute'
            }        
        }
        
        function addBtn() {
            if ($('#last-block').hasClass('active')) {
                nextBtn.style.display = 'none'
                sendBtn.style.display = 'block'
            } else {
                sendBtn.style.display = 'none'
            }     
        }

        function upScroll() {
            let scrollUp = window.scrollTo(0,700)
            //console.log(scrollUp);
            nextBtn.addEventListener("click", function() {
                if ($(window).width() > 1360) {
                    scrollUp
                } else if ($(window).width() > 760) {
                    scrollUp - 200
                } else if ($(window).width() > 560) {
                    scrollUp - 300
                }        
            });
        }

        function requiredBtn() {
            let blockBtn    = document.querySelector('.blocked');
            let user_name   = $('#user_name').val();
            let user_mail   = $('#user_mail').val();
            let user_phone  = $('#user_phone').val();
            let move_date   = $('#move_date').val();

            if ((user_name === "") || (user_mail === "") || (user_phone === "") || (move_date === "")) {
                blockBtn.style.display = 'block'
            } else {
                blockBtn.style.display = 'none'
            }
        }

        function deleteClass() {
            nextBtn.addEventListener("click", function() {
            });

            PrevBtn.addEventListener('click', function () {
                if(movingTo.classList.contains('active')) {
                    elevator.classList.remove('active');
                 }
                 if( newVariable.classList.contains('active') || 
                    planning.classList.contains('active') || 
                    new_elevator.classList.contains('active') || 
                    care.classList.contains('active') ||
                    lastBlock.classList.contains('active')
                    ) {
                    // console.log('hello');
                    movingTo.classList.remove('active');
                    
                } 
            });
        }



        function servicesWay() {
           let services = document.querySelectorAll('.moves');
           let moving = document.getElementById('moving');

            nextBtn.addEventListener("click", function() {
                services.forEach(movin=> {
                    if (movin.checked && moving.classList.contains('on') === false) {
                        $('#trh').removeClass('active');
                        $('#last-block').addClass('active');
                        nextBtn.style.display = 'none';
                        sendBtn.style.display = 'block';
                        progressQ.style.width = `90%`;
                        progressNum.innerHTML = `90%`;
                        
                    }
                })
                
            });
            sendBtn.addEventListener("click", function() {
                quiz_form.style.display = 'none';
            });
        }

        setInterval(function(){
            requiredBtn();
        },500);

        
        
    }    
    // QUIZ THE END

});



