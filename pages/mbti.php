<?php
$mbti1 = isset($_GET['mbti1']) && $_GET['mbti1'] !== '' ? $_GET['mbti1'] :'';
$mbti2 = isset($_GET['mbti2']) && $_GET['mbti2'] !== '' ? $_GET['mbti2'] :'';
?>
<div class="container my-5">
    <h1>Cognitive Functions Comparison Tool</h1>
    <form class="form row">
        <div class="col-md-3">
            <label for="compare1">MBTI Type to Compare 1</label>
            <input type="text" class="d-block uppercase" pattern="[IE]{1}[NS]{1}[TF]{1}[PJ]{1}" id="compare1" placeholder="Type1" list="types" value="<?php echo $mbti1?>">
        </div>
        <div class="col-md-3">
            <label for="compare2">MBTI Type to Compare 2</label>
            <input type="text" class="d-block uppercase" pattern="[IE]{1}[NS]{1}[TF]{1}[PJ]{1}" id="compare2" placeholder="Type1" list="types" value="<?php echo $mbti2?>">
        </div>

        <datalist id="types">
            <option value="INTP">
            <option value="ENTP">
            <option value="ISTP">
            <option value="ENFP">
            <option value="ISFP">
            <option value="INFP">
            <option value="INTJ">
            <option value="INFJ">
            <option value="ESTJ">
            <option value="ENTJ">
            <option value="ESFJ">
            <option value="ENFJ">
            <option value="ISTJ">
            <option value="ISFJ">
            <option value="ESTP">
            <option value="ESFP">
        </datalist>
        <div class="col-12">
            <button class="btn btn-primary mt-3">Compare</button>
        </div>
    </form>

    <div class="row">
        <div class="col">
            <div class="row my-5">
                <div class="col-md-1 mb-4 mb-md-0" id="type1"></div>
                <div class="col-md-6" id="cogs1"></div>
            </div>

            <div class="row my-5">
                <div class="col-md-1 mb-4 mb-md-0" id="type2"></div>
                <div class="col-md-6" id="cogs2"></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <h2 id="type_desc1" class="mt-5 mb-4 display-3 fw-normal"></h2>
            <p id="cogs_desc1"></p>
        </div>
        <div class="col-md-6">
            <h2 id="type_desc2" class="mt-5 mb-4 display-3 fw-normal"></h2>
            <p id="cogs_desc2"></p>
        </div>
    </div>
</div>

<footer class="container mb-5 text-small text-muted">
    &copy Nipuna Dodantenna <?php echo date('Y') ?><br>
    Special thanks to https://www.wellandgood.com/<br>
    v1.0.1.001
</footer>
<script>
 const cognitive_functions = {
     INTP : ['Ti', 'Ne', 'Si', 'Fe'],
     ISTP : ['Ti', 'Se', 'Ni', 'Fe'],
     ENTP : ['Ne', 'Ti', 'Fe', 'Si'],
     ENFP : ['Ne', 'Fi', 'Te', 'Si'],
     ISFP : ['Fi', 'Se', 'Ni', 'Te'],
     INFP : ['Fi', 'Ne', 'Si', 'Te'],
     INTJ : ['Ni', 'Te', 'Fi', 'Se'],
     INFJ : ['Ni', 'Fe', 'Ti', 'Se'],
     ESTJ : ['Te', 'Si', 'Ne', 'Fi'],
     ENTJ : ['Te', 'Ni', 'Se', 'Fi'],
     ESFJ : ['Fe', 'Si', 'Ne', 'Ti'],
     ENFJ : ['Fe', 'Ni', 'Se', 'Ti'],
     ISTJ : ['Si', 'Te', 'Fi', 'Ne'],
     ISFJ : ['Si', 'Fe', 'Ti', 'Ne'],
     ESTP : ['Se', 'Ti', 'Fe', 'Ni'],
     ESFP : ['Se', 'Fi', 'Te', 'Ni'],
 }

 const cog_desc = {
     Se : {
         title: 'Extroverted Sensing',
         desc: 'Extroverted sensing is using taste, touch, smell, sound, movement and sight to easily absorb information in the physical world. As strongly observant, these people pick up on details other people do not notice, and some even have a photographic memory. They love excitement, spontaneity, new experiences, and material goods.'
     },
     Si : {
         title: 'Introverted Sensing',
         desc: 'Introverted sensing is understanding the world through past precedent and experience. People who are introverted sensors thrive using routine, tradition, organization, and rules. They are often very attuned to their bodies, and have specific ways of doing things that work for them in order to get the job done. They are responsible, reliable, and cautious.'
     },
     Te : {
         title: 'Extroverted Thinking',
         desc: 'Extroverted thinking is outwardly conveying thoughts using logic, reason, and analysis. Extroverted thinkers are clear and concise, direct, and unmoved by emotional appeals. They are often strong orators and writers, who have thoughtful, well-researched arguments and theories. Extroverted thinkers like to convince people of their thoughts and implement new ideas.'
     },
     Ti : {
         title: 'Introverted Thinking',
         desc:'Introverted thinking is a function that seeks to understand personal ideas using a deeply specified framework. Introverted thinkers are constantly mining their own thoughts in an attempt to be rational and reasonable, slowly ruling out other ideas before coming to their own firm conclusions (and they’re often guarded about how they got to these conclusions).'
     },
     Ne : {
         title: 'Extroverted Intuition',
         desc: 'Extroverted intuition often means noticing patterns, symbols, and connections in the world that others may not see. Extroverted intuitives live for possibility, often expressing themselves through a tumble of ideas, or a constant external brainstorm. They may talk about many things they want to do, but not ultimately follow through. For them, it’s all part of the process to get to the best idea.'
     },
     Ni : {
         title: 'Introverted Intuition',
         desc: 'I once heard introverted intuition described as “knowing without knowing how,” as well as “thinking without thinking.” It’s the most mystical of all the MBTI functions. People with this function tend to reach conclusions without having a clear idea as to how they got there. They are wise, convicted, and always have a plan to work toward a bigger picture and seek to build and understand complex systems. Introverted intuitives are always processing in the background, and regularly have “a-ha!” realizations when answers simply come out of nowhere.'
     },
     Fe : {
         title: 'Extroverted Feeling',
         desc: 'Extroverted feeling is concerned with harmony, bringing people together, and caring. Extroverted feelers are great at reading the emotions of others; they are big empathizers, absorbing the feelings of others around them to the point that they sometimes cannot tell which feelings are their own. They easily squash and step around conflicts, and they are typically very social.'
     },
     Fi : {
         title: 'Introverted Feeling',
         desc: 'Introverted feeling is a function concerned with authenticity, individualism and values. Introverted feelers know what they believe, have a strong sense of self, and can easily identify their personal experience of emotion. They are often outspoken activists, and love to help those in need. They don’t have stronger feelings than others who utilize this function, but they do have more mastery over them and can put them toward change—of self, of others, of society.'
     }
 }

 const funcs = [
     {
         name: 'Dominant function',
         desc : 'The first function in the stack is called the dominant function, the strongest one you use so often, you may not even realize you are doing it.'
     },
     {
         name: 'Auxiliary function',
         desc: 'The second function is called the auxiliary function, which assists the dominant function in conveying ideas and is also relatively strong in your personality.'
     },
     {
         name: 'Tertiary function',
         desc: 'The third function is the tertiary function, which may be slightly under-developed, but does start to manifest in your type more prominently as you age.'
     },
     {
         name: 'Inferior function',
         desc: 'The fourth function is your inferior function, which is challenging to access and often only comes out under stress.'
     }
 ]

 //caps lock login username
 $('.uppercase').keyup(function () {
     $(this).val($(this).val().toUpperCase());
 });

 <?php
     if(!empty($mbti1) || !empty($mbti2)){
         ?>
         $('form').submit(function(e){
             e.preventDefault();
         });
         <?php
     }
 ?>

 $('form').on('submit', function (e) {
     e.preventDefault();

     const type1 = $('#compare1').val();
     const type2 = $('#compare2').val();

     $('#type1').html(type1);
     $('#type2').html(type2);

     $('#cogs1').html(function () {
         let str ='';
         let cogs ='';
         $.each(cognitive_functions[type1], function (key, val) {
             str += '<span class="bg-cogs rounded-pill p-3 me-3 font-monospace">'+val+'</span>';
             cogs += '<h3>'+cog_desc[val].title+' ('+val+')</h3>';
             cogs += '<p>'+cog_desc[val].desc+'</p>';
         })
         return str;
     });
     $('#cogs2').html(function () {
         let str ='';
         let cogs ='';
         $.each(cognitive_functions[type2], function (key, val) {
             str += '<span class="bg-cogs rounded-pill p-3 me-3 font-monospace">'+val+'</span>';
            cogs += '<h3>'+cog_desc[val].title+' ('+val+')</h3>';
            cogs += '<p>'+cog_desc[val].desc+'</p>';
         })
         return str;
     });

     $('#type_desc1').html(type1);
     $('#cogs_desc1').html(function (){
         let cogs ='';
         let count =0;
         $.each(cognitive_functions[type1], function (key, val) {
             cogs += '<h3>'+cog_desc[val].title+' ('+val+')</h3>';
             cogs += '<div class="ps-2 ms-1 border border-5 border-bottom-0 border-end-0 border-top-0">'
             cogs += '<h4 class="h5 text-muted fst-italic cursor-pointer func-name">'+funcs[count].name+' <i class="la la-info-circle"></i> </h4>';
             cogs += '<p class="text-muted text-small fst-italic func-desc" style="display: none;">'+funcs[count].desc+'</p>';
             cogs += '</div>';
             cogs += '<p>'+cog_desc[val].desc+'</p>';
             count++;
         })
         return cogs;
     });

     $('#type_desc2').html(type2);
     $('#cogs_desc2').html(function (){
         let cogs ='';
         let count =0;
         $.each(cognitive_functions[type2], function (key, val) {
             cogs += '<h3>'+cog_desc[val].title+' ('+val+')</h3>';
             cogs += '<div class="ps-2 ms-1 border border-5 border-bottom-0 border-end-0 border-top-0">'
             cogs += '<h4 class="h5 text-muted fst-italic cursor-pointer func-name">'+funcs[count].name+' <i class="la la-info-circle"></i> </h4>';
             cogs += '<p class="text-muted text-small fst-italic func-desc" style="display: none;">'+funcs[count].desc+'</p>';
             cogs += '</div>';
             cogs += '<p>'+cog_desc[val].desc+'</p>';
             count++;
         })
         return cogs;
     });
 });

 $('#cogs_desc1, #cogs_desc2').on('click', '.func-name', function (e) {
     e.preventDefault();
     $(this).siblings('.func-desc').toggle();
     $(this).find('i').toggleClass('text-warning');
 })
</script>