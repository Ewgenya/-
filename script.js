		<script>
			"use strict";
			let sum=0, sum0=0, summ=0, days, per, Ydeys;  //Основные переменные
			let a, b;    //Вспомогательные переменные
			{
				a=sum0+summ;
				b=per/Ydeys;
				sum=sum0+a*days*b;
				
   			 tariff = document.querySelector('.revenue-tariff'),
    		 result = document.querySelector('.revenue-result');

			input.addEventListener('input', function() {

   			 if ( this.value >= 1000 && this.value <= 100000 ) {    
       		 tariff.innerHTML = 'Вклад: на 6 месяцев, под 3% в месяц';
       		 result.innerHTML = 'Доход за весь период: ' + this.value / 100 * 3 * 6 + 'p';
    			}
   			 else if ( this.value >= 100000 && this.value <= 500000 ) {    
       		 tariff.innerHTML = 'Вклад: на 12 месяцев, под 4% в месяц';
      		  result.innerHTML = 'Доход за весь период: ' + this.value / 100 * 4 * 12 + 'p';
   			 }
   			 else if ( this.value >= 500000 && this.value <= 1500000 ) {
       		 tariff.innerHTML = 'Вклад: на 18 месяцев, под 5% в месяц';
       		 result.innerHTML = 'Доход за весь период: ' + this.value / 100 * 5 * 12 + 'p';    
    		}
			}, false);

		</script>

