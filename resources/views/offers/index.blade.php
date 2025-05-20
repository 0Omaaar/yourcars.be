@include('navbar.navbar')

<style>
    @media (max-width: 768px) {
          .vehicles-header{
            margin-top: -48% !important;
          }
          #vehiclesFrame{
            height: 650px; !important;
          }
    }
</style>

<!-- Content Begin -->
<div class="no-bottom no-top" id="content">
    <div id="top"></div>

    <!-- Vehicles Section -->
    <section class="vehicles-section">
        <div class="vehicles-header">
            <h2>Véhicules Disponibles</h2>

        </div>

        <div class="iframe-wrapper">
            <iframe id="vehiclesFrame"
                src="https://professional.autoscout24.be/your-cars-bvba/vehicules?ipc=dealerinfo-home|stocklist&amp;ipl=ourcars#atype=C&amp;cid=8669431&amp;ustate=U,N,A&amp;sort=price&amp;results=20&amp;page=1"
                frameborder="0" allowfullscreen loading="lazy"></iframe>
        </div>
    </section>
</div>
<!-- Content Close -->

<a href="#" id="back-to-top"></a>

@include('footer.footer')

<!-- Style -->
<style>
    * {
        --title-font: "Prompt", Helvetica, Arial, sans-serif;
        --body-font: "Manrope", Helvetica, Arial, sans-serif;
        --border-default: solid 1px rgba(30, 30, 30, 1);
        --bg-color-even: #131212;
        --bg-color-odd: #f5e3e3;
        --bg-color-dark: #000000;
        --body-font-color: #000000;
        --dark-body-font-color: rgba(255, 255, 255, .5);
    }


    .vehicles-section {
        background-color: #0f1014;
        padding: 25px 20px;
        margin: 100px auto;
        max-width: 1200px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .header.transparent {
        background: black !important;
    }

    .vehicles-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #151921;
        padding: 15px 20px;
        border-bottom: 1px solid #000;
        border-radius: 8px 8px 0 0;
        margin-bottom: 20px;
    }

    .vehicles-header h2 {
        color: #ffffff;
        font-size: 20px;
        margin: 0;
    }

    .vehicles-header span {
        color: #cccccc;
        font-size: 16px;
    }

    .iframe-wrapper {
        overflow: hidden;
        border-radius: 0 0 8px 8px;
    }

    .iframe-wrapper iframe {
        width: 100%;
        height: 800px;
        border: none;
        display: block;
    }

    @media (max-width: 992px) {
        .iframe-wrapper iframe {
            height: 700px;
        }
    }

    @media (max-width: 768px) {
        .vehicles-header h2 {
            font-size: 18px;
        }

        .vehicles-header span {
            font-size: 14px;
        }

        .iframe-wrapper iframe {
            height: 600px;
        }
    }

    @media (max-width: 576px) {
        .vehicles-header {
            padding: 10px 15px;
        }

        .vehicles-header h2 {
            font-size: 16px;
        }

        .iframe-wrapper iframe {
            height: 500px;
        }
    }
</style>

<!-- Script (optional if you want dynamic iframe height) -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const iframe = document.getElementById('vehiclesFrame');

        iframe.onload = function() {
            try {
                const iframeDoc = iframe.contentDocument || iframe.contentWindow.document;
                const height = Math.max(
                    iframeDoc.body.scrollHeight,
                    iframeDoc.documentElement.scrollHeight,
                    iframeDoc.body.offsetHeight,
                    iframeDoc.documentElement.offsetHeight,
                    iframeDoc.body.clientHeight,
                    iframeDoc.documentElement.clientHeight
                );
                iframe.style.height = height + 'px';
            } catch (e) {
                console.warn("Cross-origin iframe detected: cannot auto-resize.");
            }
        };
    });
</script>
