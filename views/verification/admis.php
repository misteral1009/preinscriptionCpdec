<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CPDEC</title>
    <link rel="stylesheet" href="../../assets/css/dist/style.css">
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../assets/js/pdfmake/build/pdfmake.js"></script>
    <script src="../../assets/js/pdfmake/build/vfs_fonts.js"></script>
    <script>
        function init() {
            if(!sessionStorage.candidat) {
                window.location.href = "../verification/verification.php"
            }
        }
    </script>
</head>

<body>
<div class="loader lds-rings">
    <div class="lds-ring"></div>
    <div class="lds-ring"></div>
    <div class="lds-ring"></div>
    <div class="lds-ring"></div>
</div>
<div class="body">
    <div class="header">
        <div class="header__img">
            <img src="../../assets/img/logoInphb.gif" alt="logoinphb">
        </div>
    </div>
    <div class="container">
        <div class="title"><h4>NOTIFICATION</h4></div>
        <div class="card message-card">
            <div class="card__body">
                <div class="card__title bg_green">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <h4>
                        Succès
                    </h4>
                </div>
                <div class="card__details">
                    <div>Félicitations, votre candidature a été acceptée. Vous pouvez maintenant vous rendre au CPDEC pour effectuer votre inscription</div>
                    <div class="card__button bg_green">
                        <button id="btn-back" style="outline: none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            Retour
                        </button>
                    </div>
                </div>
                <div class="card__footer">
                    <div class="card__footer__circle">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <p>
                        <b>Informations :</b>
                    <ul>
                        <li>Vous pouvez maintenant vous rendre au siège du CPDEC, avec votre fiche et un document attestant de votre identité, pour effectuer votre inscription</li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
<script>
    $('#btn-back').on('click', function (){
        window.location = "verification.php"
    })
</script>
<script src="../../assets/js/load.js"></script>
</html>
