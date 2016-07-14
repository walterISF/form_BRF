
   $('#btForm').click(function(){

   var questao1 = $("input[name=questao1]:checked").val();
   var questao2 = $("input[name=questao2]:checked").val();
   if (questao2 == 'textarea') {
       questao2 = $("input[name=questaooutro2]").val();
   }
   var questao3 = $("input[name=questao3]:checked").val();
   if (questao3 == 'textarea') {
       questao3 = $("input[name=questaooutro3]").val();
   }

   var questao4 = $("textarea[name=questao4]").val();


   var questao51 = $("input[name=questao51]:checked").val();
   var questao52 = $("input[name=questao52]:checked").val();
   var questao53 = $("input[name=questao53]:checked").val();
   var questao54 = $("input[name=questao54]:checked").val();
   var questao55 = $("input[name=questao55]:checked").val();
   var questao56 = $("input[name=questao56]:checked").val();
   var questao57 = $("input[name=questao57]:checked").val();

   var questao61 = $("input[name=questao61]:checked").val();
   var questao62 = $("input[name=questao62]:checked").val();
   var questao63 = $("input[name=questao63]:checked").val();
   var questao64 = $("input[name=questao64]:checked").val();
   var questao65 = $("input[name=questao65]:checked").val();
   var questao66 = $("input[name=questao66]:checked").val();
   var questao67 = $("input[name=questao67]:checked").val();

   var questao71 = $("input[name=questao71]:checked").val();
   var questao72 = $("input[name=questao72]:checked").val();
   var questao73 = $("input[name=questao73]:checked").val();
   var questao74 = $("input[name=questao74]:checked").val();
   var questao75 = $("input[name=questao75]:checked").val();
   var questao76 = $("input[name=questao76]:checked").val();
   var questao77 = $("input[name=questao77]:checked").val();

   var questao8 = $("input[name=questao8]:checked").val();
   var questao9 = $("input[name=questao9]:checked").val();
   if (questao9 == 'textarea') {
       questao9 = $("input[name=questaooutro9]").val();
   }
   var questao10 = $("input[name=questao10]:checked").val();
   var questao11 = $("textarea[name=questao11]").val();

		var emailPesquisa = $.ajax({
            url: 'enviarEmail.php',
            dataType: 'json',
            data: {
                'questao1': questao1,
                'questao2': questao2,
                'questao3': questao3,
                'questao4': questao4,
                'questao51': questao51,
                'questao52': questao52,
                'questao53': questao53,
                'questao54': questao54,
                'questao55': questao55,
                'questao56': questao56,
                'questao57': questao57,
                'questao61': questao61,
                'questao62': questao62,
                'questao63': questao63,
                'questao64': questao64,
                'questao65': questao65,
                'questao66': questao66,
                'questao67': questao67,
                'questao71': questao71,
                'questao72': questao72,
                'questao73': questao73,
                'questao74': questao74,
                'questao75': questao75,
                'questao76': questao76,
                'questao77': questao77,
                'questao8': questao8,
                'questao9': questao9,
                'questao10': questao10,
                'questao11': questao11
            },
            async: false,
            }).responseText;
});