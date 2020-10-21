$(document).ready(function(){

    // hijri to miladi....................

    $('#h2m').on('click',function(){

        var h_day = $('#h-day').val();
        var h_month = $('#h-month').val();
        var h_year = $('#h-year').val();


        if(h_day != '' && h_month != '' && h_year != ''  ){

            $('#m-day').val( moment(h_year + '/' + h_month + '/' + h_day, 'iYYYY/iM/iD').format('D'));
            $('#m-month').val( moment(h_year + '/' + h_month + '/' + h_day, 'iYYYY/iM/iD').format('M'));
            $('#m-year').val( moment(h_year + '/' + h_month + '/' + h_day, 'iYYYY/iM/iD').format('Y'));

        }
        



    });

    // miladi to Hijri....................

    $('#m2h').on('click',function(){

        var m_day = $('#m-day').val();
        var m_month = $('#m-month').val();
        var m_year = $('#m-year').val();

        if(m_day != '' && m_month != '' && m_year != ''  ){

            $('#h-day').val( moment(m_year + '/' + m_month + '/' + m_day, 'YYYY/M/D').format('iD'));
            $('#h-month').val( moment(m_year + '/' + m_month + '/' + m_day, 'YYYY/M/D').format('iM'));
            $('#h-year').val( moment(m_year + '/' + m_month + '/' + m_day, 'YYYY/M/D').format('iYYYY'));
          
        }
        



    });



})