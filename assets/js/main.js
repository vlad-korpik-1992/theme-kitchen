$("#phone").inputmask({"mask": "+48999999999"});
$("#mobile").inputmask({"mask": "+48999999999"});
function imgClick(e) {
    e.preventDefault();
    let label = e.target.parentNode;
    let id = label.getAttribute('id');
    let inputId = id.replace("answer","input");
    jQuery("#"+id).toggleClass('quiz__label--active');
    if ($('#'+inputId).is(':checked')){
        $('#'+inputId).removeAttr('checked');
    }
    else{
        $('#'+inputId).attr('checked', 'checked');
    }
};
$(document).ready(function() {
    $("a[href*='category/news']").each(function() { 
        this.href = this.href.replace(/category/, 
            "");
    });
    $('.start').on('click', function (e) {
        e.preventDefault();
        $('.quiz--start').toggleClass('quiz--open');
        $('body').toggleClass('body--fixed');
    });
    $('.quiz__close').on('click', function (e) {
        e.preventDefault();
        $('.quiz').removeClass('quiz--open');
        $('body').removeClass('body--fixed');
    });
    $('.quiz__label__img').on('click', function (e) {
        e.preventDefault();
        let label = e.target.parentNode;
        let id = label.getAttribute('id');
        let inputId = id.replace("answer","input");
        jQuery("#"+id).toggleClass('quiz__label--active');
        if ($('#'+inputId).is(':checked')){
            $('#'+inputId).removeAttr('checked');
        }
        else{
            $('#'+inputId).attr('checked', 'checked');
        }
    });
    let question1Answer = '';
    const questionMap = new Map(
        [
            ['1', 'Какой стиль кухни вам нравится?'],
            ['2', 'Какой вы видите свою кухню?'],
            ['3', 'Какая форма кухни вам нравится?'],
            ['4', 'Какой будет холодильник?'],
            ['5', 'Где планируете установить духовку?'],
            ['6', 'Хотите ли вы установить посудомоечную машину?'],
            ['7', 'Есть ли у вас проект кухни от дизайнера или от застройщика?'],
            ['8', 'Какой ориентировочный бюджет вашей кухни?'],
            ['9', 'На какой стадии сейчас находится кухня?']
        ]
    );
    const answerQuestion3 = ["прямая", "угловая", "U-образная", "кухня с островом", "кухня с полуостровом"];
    const answerQuestion4 = ["Отдельно стоящий 60 см", "Отдельно стоящий 70 см", "Отдельно стоящий 90 см", "Встроенный 60 см", "Встроенный 70 см", "Другой размер"];
    const answerQuestion5 = ["Под варочной панелью", "В пенале для духового шкафа", "Пенал для духовки + микроволновка"];
    const answerQuestion6 = ["Да, шириной 60 см", "Да, шириной 45 см", "Нет"];
    const answerQuestion7 = ["Да","Нет"];
    const answerQuestion8 = ["от 10000","от 10 до 15", "от 15 до 20","от 20 до 25", "от 25-30","30+"];
    const answerQuestion9 = ["В процессе строительства", "Ключи уже получены/скоро получим","В процессе ремонта", "не определились"];
    let nextQuestion = '';
    $('.quiz-send').on('click', function(e) {
        e.preventDefault();
        let btn = e.target;
        let id = btn.getAttribute('id');
        let answers = '';
        let question = questionMap.get(id);
        let numberQuestion;
        let newHtml = '';
        if(id == 1 || id==3){
            let checkboxes = document.getElementsByName('answer'+id+'[]');
            for (let i= 0; i<checkboxes.length; i++)
            {
            if (checkboxes[i].checked === true)
                {
                    answers = answers + checkboxes[i].value + "|";
                }
            }
            question1Answer = question1Answer + question + ' ' + answers + '<br/>';
            numberQuestion = parseInt(id) + 1;
            numberQuestion = '' + numberQuestion;
            if(id == 1) {
                newHtml = '<div class="quiz__box__full"><input type="text" class="quiz__input" id="answer2"></div>';
            }
            else{
                $.each(answerQuestion4, function(index,value) {
                    newHtml = newHtml + '<div class="quiz__box__half"><div class="quiz__box__half__items"><input class="radio" type="radio" id="radio'+numberQuestion+index+'" name="answer'+numberQuestion+'" value="'+value+'"><label class="radio__label quiz__label quiz__label--pl" for="radio'+numberQuestion+index+'">'+value+'</label></div></div>';
                });
            }
            id=(parseInt(id) + 1)*10;
            $(this).attr('id', numberQuestion);
            $(".quiz-send--id").attr("id", numberQuestion);
            id+="%";
            $(".progress__bar").attr("style", "width:"+id);
            $(".progress__num").html(id);
            nextQuestion = questionMap.get(numberQuestion);
            $(".quiz__body__title").html(nextQuestion);
            $("#quiz__box").html(newHtml);
        }
        if(id == 2){
            let answer = document.getElementById('answer2').value;
            question1Answer = question1Answer + question + ' ' + answer + '<br/>';
            numberQuestion = parseInt(id) + 1;
            numberQuestion = '' + numberQuestion;
            id=(parseInt(id) + 1)*10;
            $(this).attr('id', numberQuestion);
            $(".quiz-send--id").attr("id", numberQuestion);
            id+="%";
            $(".progress__bar").attr("style", "width:"+id);
            $(".progress__num").html(id);
            nextQuestion = questionMap.get(numberQuestion);
            $(".quiz__body__title").html(nextQuestion);
            $.each(answerQuestion3, function(index,value) {
                newHtml = newHtml + '<div class="quiz__box__fifth quiz__box__fifth--column"><input class="checkbox" type="checkbox" id="input'+numberQuestion+index+'" name="answer'+numberQuestion+'[]" value="'+value+'"><label class="quiz__label" id="answer'+numberQuestion+index+'"><img onclick="imgClick(event)" src="/wp-content/themes/kitchen/assets/img/quiz/quiz-answer-'+numberQuestion+index+'.jpg" alt=""></label><p class="subscription">'+value+'<p></div>';
            });
            $("#quiz__box").html(newHtml);
        }
        if(id > 3){
            let checkboxes = document.getElementsByName('answer'+id);
            for (let i= 0; i<checkboxes.length; i++)
            {
            if (checkboxes[i].checked === true)
                {
                    answers = checkboxes[i].value;
                }
            }
            question1Answer = question1Answer + question + ' ' + answers + '<br/>';
            numberQuestion = parseInt(id) + 1;
            numberQuestion = '' + numberQuestion;
            id=(parseInt(id) + 1)*10;
            $(this).attr('id', numberQuestion);
            $(".quiz-send--id").attr("id", numberQuestion);
            id+="%";
            $(".progress__bar").attr("style", "width:"+id);
            $(".progress__num").html(id);
            nextQuestion = questionMap.get(numberQuestion);
            $(".quiz__body__title").html(nextQuestion);
            if(numberQuestion == 5) {
                $.each(answerQuestion5, function(index,value) {
                    newHtml = newHtml + '<div class="quiz__box__half"><div class="quiz__box__half__items"><input class="radio" type="radio" id="radio'+numberQuestion+index+'" name="answer'+numberQuestion+'" value="'+value+'"><label class="radio__label quiz__label quiz__label--pl" for="radio'+numberQuestion+index+'">'+value+'</label></div></div>';
                });
            }
            if(numberQuestion == 6) {
                $.each(answerQuestion6, function(index,value) {
                    newHtml = newHtml + '<div class="quiz__box__half"><div class="quiz__box__half__items"><input class="radio" type="radio" id="radio'+numberQuestion+index+'" name="answer'+numberQuestion+'" value="'+value+'"><label class="radio__label quiz__label quiz__label--pl" for="radio'+numberQuestion+index+'">'+value+'</label></div></div>';
                });
            }
            if(numberQuestion == 7) {
                $.each(answerQuestion7, function(index,value) {
                    newHtml = newHtml + '<div class="quiz__box__half"><div class="quiz__box__half__items"><input class="radio" type="radio" id="radio'+numberQuestion+index+'" name="answer'+numberQuestion+'" value="'+value+'"><label class="radio__label quiz__label quiz__label--pl" for="radio'+numberQuestion+index+'">'+value+'</label></div></div>';
                });
            }
            if(numberQuestion == 8) {
                $.each(answerQuestion8, function(index,value) {
                    newHtml = newHtml + '<div class="quiz__box__half"><div class="quiz__box__half__items"><input class="radio" type="radio" id="radio'+numberQuestion+index+'" name="answer'+numberQuestion+'" value="'+value+'"><label class="radio__label quiz__label quiz__label--pl" for="radio'+numberQuestion+index+'">'+value+'</label></div></div>';
                });
            }
            if(numberQuestion == 9) {
                $.each(answerQuestion9, function(index,value) {
                    newHtml = newHtml + '<div class="quiz__box__half"><div class="quiz__box__half__items"><input class="radio" type="radio" id="radio'+numberQuestion+index+'" name="answer'+numberQuestion+'" value="'+value+'"><label class="radio__label quiz__label quiz__label--pl" for="radio'+numberQuestion+index+'">'+value+'</label></div></div>';
                });
            }
            if(numberQuestion == 10) {
                $('.quiz--start').toggleClass('quiz--open');
                $('.quiz--finish').toggleClass('quiz--open');
                $(".quiz__body__title").html('Оставьте ваши контакты');
                newHtml = '';
            }
            $("#quiz__box").html(newHtml);
        }
    });
    /* Ajax Quiz Send*/
    $('#quiz-send').click(function(e){
        e.preventDefault();
        x = document.getElementById('firstname').value;
        if (x === "") {
            document.getElementById('quiz-error').textContent = "Укажите Ваше имя";
            return false;
        }
        x = document.getElementById('mobile').value;
        if (x === "") {
            document.getElementById('quiz-error').textContent = "Укажите Ваш номер телефона";
            return false;
        } else {
                let re = /^\+48[0-9]{9}$/g;
                if(!re.test(x)){
                    document.getElementById('quiz-error').textContent = "Укажите номер телефона в формате +48ХХХХХХХХХXX";
                return false;
            }
        }
        $('#quiz-error').removeClass("error");
        document.getElementById('quiz-error').textContent = "Отправка...";
        data = new FormData();
        data.append( 'firstname', $('input[name=firstname]').val());
        data.append( 'phone', $('input[name=mobile]').val());
        data.append( 'answer', question1Answer);
        const uploadField = document.getElementById("file");
        if(uploadField.files.length >= 6){
            document.getElementById('quiz-error').textContent = "Запрещено загружать больше 5 файлов";
            return false;
        }
        if(uploadField.files.length >=1){
            for (let i = 0; i < uploadField.files.length; i++){ 
                if(uploadField.files[i].size > 1048576){
                    document.getElementById('quiz-error').textContent = "Размер файла не должен превышать 1MB";
                    return false;
                }
                if ( /\.(jpe?g|png|PNG|gif|tif|doc|docx|xls|xlsx|csv|pdf|txt|zip|rar)$/i.test(uploadField.files[i].name) === false ){
                    document.getElementById('quiz-error').textContent = "Не допустимый формат файла"; 
                    return false;
                }
                data.append('file[]', document.getElementById('file').files[i] );
            }
        }
		$.ajax({
			url: '/wp-content/themes/kitchen/quiz-mail.php',
			type: "POST",
			data: data,
            processData: false,
            contentType: false,
			success: function() {
				$('#quiz-form').trigger('reset');
				$('#quiz-error').text("Ваше сообщение отправлено!");
				setTimeout(function () {
					$('#quiz-error').text("").addClass("error");
				}, 2000);
			},
			error: function (jqXHR) {
				$('#quiz-error').text(jqXHR);
			}
		});
	});
	$('.menu__btn').on('click', function (e) {
        e.preventDefault();
        $('.menu__btn').toggleClass('menu__btn--close');
        $('.menu__list').toggleClass('menu__list--active');
        $('.menu__btn-element').toggleClass('menu__btn-element_close');
    });
    $('.material__menu__list__link').click(function (e) {
        e.preventDefault();
        let elem = e.target;
		let id = '1' + elem.getAttribute('id');
		$('.material__content').removeClass('material__content--active');
		jQuery("#"+id).addClass('material__content--active');
	});
    $('.fittings__link').click(function (e) {
        e.preventDefault();
        let elem = e.target;
		let id = '1' + elem.getAttribute('id');
		$('.fittings__content').removeClass('fittings__content--active');
		jQuery("#"+id).addClass('fittings__content--active');
	});
	$('.catalog__box__items__link').click(function (e) {
        e.preventDefault();
        let elem = e.target;
		let id = '1' + elem.getAttribute('id');
		$('.catalog__content').removeClass('catalog__content--open');
		$('.catalog__box__items__link').removeClass('catalog__box__items__link--active');
		jQuery("#"+id).addClass('catalog__content--open');
		let idElem = elem.getAttribute('id');
		jQuery("#"+idElem).addClass('catalog__box__items__link--active');
	});
	$('.project__slider--vertical').slick({
        vertical: true,
        verticalSwiping: true,
        slidesToShow: 1,
        autoplay: true,
        dots: false,
        arrows: false,
        speed: 2000,
    });
    $('.project__slider--horisontal').slick({
        slidesToShow: 1,
        autoplay: true,
        dots: false,
        arrows: false,
        speed: 1000,
    });
	$('.cart__slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.cart__sliderprev'
	});
	$('.cart__sliderprev').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		infinite: true,
		asNavFor: '.cart__slider',
		dots: false,
		arrows: false,
		focusOnSelect: true,
		responsive: [
		  {
			breakpoint: 767,
			settings: {
				dots: false,
				slidesToShow: 2,
				rows: 1,
				centerMode: false
			}
		  }
		]
	});

	/* Ajax Footer Form*/
    $('#send').click(function(e){
        e.preventDefault();
        x = document.getElementById('firstname').value;
        if (x === "") {
            document.getElementById('status').textContent = "Укажите Ваше имя";
            return false;
        }
        x = document.getElementById('phone').value;
        if (x === "") {
            document.getElementById('status').textContent = "Укажите Ваш номер телефона";
            return false;
        } else {
                let re = /^\+48[0-9]{9}$/g;
                if(!re.test(x)){
                    document.getElementById('status').textContent = "Укажите номер телефона в формате +48ХХХХХХХХХXX";
                return false;
            }
        }
        x =  document.getElementById('desc').value;
        if (x === "") {
            document.getElementById('status').textContent = "Вы не указали мебель которая Вас интересует";
            return false;
        }
        $('#status').removeClass("status--error");
        document.getElementById('status').textContent = "Отправка...";
        const FormData = {
            'firstname': $('input[name=firstname]').val(),
            'phone': $('input[name=phone]').val(),
            'messages': $('input[name=desc]').val(),
        };
		$.ajax({
			url: '/wp-content/themes/kitchen/mail.php',
			type: "POST",
			data: FormData,
			success: function() {
				$('#form-footer').trigger('reset');
				$('#status').text("Ваше сообщение отправлено!");
				setTimeout(function () {
					$('#status').text("").addClass("status--error");
				}, 2000);
			},
			error: function (jqXHR) {
				$('#status').text(jqXHR);
			}
		});
	});
});
/* scrollto */

$('.scrollto a').on('click', function scroll(e) {
    e.preventDefault();
    let href = $(this).attr('href');
    $('html, body').animate({
        scrollTop: $(href).offset().top - 140
    }, {
        duration: 370,
        easing: "linear"
    });
});

let fields = document.querySelectorAll('.quiz__file');
    Array.prototype.forEach.call(fields, function (input) {
      let label = input.nextElementSibling,
        labelVal = label.querySelector('.quiz-fake').innerText;
  
      input.addEventListener('change', function (e) {
        let countFiles = '';
        if (this.files && this.files.length >= 1)
          countFiles = this.files.length;
  
        if (countFiles)
          label.querySelector('.quiz-fake').innerText = 'Выбрано файлов: ' + countFiles;
        else
          label.querySelector('.quiz-fake').innerText = labelVal;
      });
    })