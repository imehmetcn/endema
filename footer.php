<?php if (is_home()) : ?>
    
    <script id="list-hover-vs" type="x-shader/x-vertex">
        uniform vec2 uOffset;
        varying vec2 vUv;
        vec3 deformationCurve(vec3 position, vec2 uv, vec2 offset) {
            float M_PI = 3.1415926535897932384626433832795;
            position.x = position.x + (sin(uv.y * M_PI) * offset.x);
            position.y = position.y + (sin(uv.x * M_PI) * offset.y);
            return position;
        }
        void main() {
            vUv =  uv + (uOffset * 2.);
            vec3 newPosition = position;
            newPosition = deformationCurve(position,uv,uOffset);
            gl_Position = projectionMatrix * modelViewMatrix * vec4( newPosition, 1.0 );
        }
    </script>
    <script id="list-hover-fs" type="x-shader/x-fragment">
        uniform sampler2D uTexture;
        uniform float uAlpha;
        uniform float uScale;
        varying vec2 vUv;
        vec2 scaleUV(vec2 uv,float scale) {
            float center = 0.5;
            return ((uv - center) * scale) + center;
        }
        void main() {
            vec3 color = texture2D(uTexture,scaleUV(vUv,uScale)).rgb;
            gl_FragColor = vec4(color,uAlpha);
        }
    </script>
    <script id="slider-textures-vs" type="x-shader/x-vertex">
        varying vec2 vUv;
        void main() {
            vUv = uv;
            gl_Position = projectionMatrix * modelViewMatrix * vec4( position, 1.0 );
        }
    </script>
    <script id="slider-textures-horizontal-fs" type="x-shader/x-fragment">
        varying vec2 vUv;
        uniform sampler2D texture;
        uniform sampler2D texture2;
        uniform sampler2D disp;
        uniform float dispFactor;
        uniform float effectFactor;
        void main() {
            vec2 uv = vUv;
            vec4 disp = texture2D(disp, uv);
            vec2 distortedPosition = vec2(uv.x + dispFactor * (disp.r*effectFactor), uv.y);
            vec2 distortedPosition2 = vec2(uv.x - (1.0 - dispFactor) * (disp.r*effectFactor), uv.y);
            vec4 _texture = texture2D(texture, distortedPosition);
            vec4 _texture2 = texture2D(texture2, distortedPosition2);
            vec4 finalTexture = mix(_texture, _texture2, dispFactor);
            gl_FragColor = finalTexture;
        }
    </script>
    <script id="slider-textures-vertical-fs" type="x-shader/x-fragment">
        varying vec2 vUv;
        uniform sampler2D texture;
        uniform sampler2D texture2;
        uniform sampler2D disp;
        uniform float dispFactor;
        uniform float effectFactor;
        void main() {
            vec2 uv = vUv;
            vec4 disp = texture2D(disp, uv);
            vec2 distortedPosition = vec2(uv.x, uv.y - dispFactor * (disp.r*effectFactor));
            vec2 distortedPosition2 = vec2(uv.x, uv.y + (1.0 - dispFactor) * (disp.r*effectFactor));
            vec4 _texture = texture2D(texture, distortedPosition);
            vec4 _texture2 = texture2D(texture2, distortedPosition2);
            vec4 finalTexture = mix(_texture, _texture2, dispFactor);
            gl_FragColor = finalTexture;
        }
    </script>
    <script src="https://endema.com.tr/wp-content/themes/endema/js/vendor.js"></script>
    <script src="https://endema.com.tr/wp-content/themes/endema/js/components.js"></script>
    </body>
    </html>

<?php elseif (is_page('about')) : ?>

<footer class="footer container-fluid bg-dark-1" id="page-footer" data-arts-theme-text="light" data-arts-footer-logo="primary">
<!--video class="background-video" autoplay muted loop>
<source src="https://endema.com.tr/wp-content/themes/endema/img/assets/video/t.mp4" type="video/mp4">
</video-->
<div class="footer__area pt-md-5 pt-sm-3 pb-md-3 pb-sm-1 pt-2 pb-0">
<div class="row align-items-center">
<div class="col-lg-3 footer__column text-center text-lg-left order-lg-1">
<section class="widget widget_rhye_logo">
<a class="logo" href="">
<div class="logo__wrapper-img">
<img class="logo__img-primary" src="https://endema.com.tr/wp-content/themes/endema/img/assets/logo/logo.webp" alt="Endema Logo" width="280" height="20"/>
<img class="logo__img-secondary" src="https://endema.com.tr/wp-content/themes/endema/img/assets/logo/logo.webp" alt="Endema Logo" width="280" height="20"/>
</div></a>
</section>
</div>
<div class="col-lg-3 footer__column text-center text-lg-right order-lg-3">
<section class="widget widget_rhye_social">
<ul class="social">
<li class="social__item"><a class="fa fa-instagram" href="https://www.instagram.com/endemashipyard/"></a></li>
<li class="social__item"><a class="fa fa-linkedin" href="https://tr.linkedin.com/company/endema-shipyard"></a></li>
</ul>
</section>
</div>
<div class="col-lg-6 footer__column text-center text-lg-center order-lg-2">
<section class="widget widget_text">
<div class="textwidget">
<p class="footeryazı"><small>2024 Endema Shipyard. All Rights Reserved.</small></p>
</div>
</section>
</div>
</div>
</div>
</footer>
 </div>
 </div>
</main>

<!--div class="initial-snow">

		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
		<div class="snow">&#10052;</div>
	</div-->
    <script id="list-hover-vs" type="x-shader/x-vertex">
        uniform vec2 uOffset;
        varying vec2 vUv;
        vec3 deformationCurve(vec3 position, vec2 uv, vec2 offset) {
            float M_PI = 3.1415926535897932384626433832795;
            position.x = position.x + (sin(uv.y * M_PI) * offset.x);
            position.y = position.y + (sin(uv.x * M_PI) * offset.y);
            return position;
        }
        void main() {
            vUv =  uv + (uOffset * 2.);
            vec3 newPosition = position;
            newPosition = deformationCurve(position,uv,uOffset);
            gl_Position = projectionMatrix * modelViewMatrix * vec4( newPosition, 1.0 );
        }
    </script>
    <script id="list-hover-fs" type="x-shader/x-fragment">
        uniform sampler2D uTexture;
        uniform float uAlpha;
        uniform float uScale;
        varying vec2 vUv;
        vec2 scaleUV(vec2 uv,float scale) {
            float center = 0.5;
            return ((uv - center) * scale) + center;
        }
        void main() {
            vec3 color = texture2D(uTexture,scaleUV(vUv,uScale)).rgb;
            gl_FragColor = vec4(color,uAlpha);
        }
    </script>
    <script id="slider-textures-vs" type="x-shader/x-vertex">
        varying vec2 vUv;
        void main() {
            vUv = uv;
            gl_Position = projectionMatrix * modelViewMatrix * vec4( position, 1.0 );
        }
    </script>
    <script id="slider-textures-horizontal-fs" type="x-shader/x-fragment">
        varying vec2 vUv;
        uniform sampler2D texture;
        uniform sampler2D texture2;
        uniform sampler2D disp;
        uniform float dispFactor;
        uniform float effectFactor;
        void main() {
            vec2 uv = vUv;
            vec4 disp = texture2D(disp, uv);
            vec2 distortedPosition = vec2(uv.x + dispFactor * (disp.r*effectFactor), uv.y);
            vec2 distortedPosition2 = vec2(uv.x - (1.0 - dispFactor) * (disp.r*effectFactor), uv.y);
            vec4 _texture = texture2D(texture, distortedPosition);
            vec4 _texture2 = texture2D(texture2, distortedPosition2);
            vec4 finalTexture = mix(_texture, _texture2, dispFactor);
            gl_FragColor = finalTexture;
        }
    </script>
    <script id="slider-textures-vertical-fs" type="x-shader/x-fragment">
        varying vec2 vUv;
        uniform sampler2D texture;
        uniform sampler2D texture2;
        uniform sampler2D disp;
        uniform float dispFactor;
        uniform float effectFactor;
        void main() {
            vec2 uv = vUv;
            vec4 disp = texture2D(disp, uv);
            vec2 distortedPosition = vec2(uv.x, uv.y - dispFactor * (disp.r*effectFactor));
            vec2 distortedPosition2 = vec2(uv.x, uv.y + (1.0 - dispFactor) * (disp.r*effectFactor));
            vec4 _texture = texture2D(texture, distortedPosition);
            vec4 _texture2 = texture2D(texture2, distortedPosition2);
            vec4 finalTexture = mix(_texture, _texture2, dispFactor);
            gl_FragColor = finalTexture;
        }
    </script>
    
<script src="https://endema.com.tr/wp-content/themes/endema/js/vendor.js"></script>
<script src="https://endema.com.tr/wp-content/themes/endema/js/components.js"></script>
</body>
</html>

<?php elseif (is_page('newbuild')) : ?>

<footer class="footer container-fluid bg-dark-1" id="page-footer" data-arts-theme-text="light" data-arts-footer-logo="primary">
<div class="footer__area pt-md-5 pt-sm-3 pb-md-3 pb-sm-1 pt-2 pb-0">
<div class="row align-items-center">
<div class="col-lg-3 footer__column text-center text-lg-left order-lg-1">
<section class="widget widget_rhye_logo">
<a class="logo" href="">
<div class="logo__wrapper-img">
<img class="logo__img-primary" src="https://endema.com.tr/wp-content/themes/endema/img/assets/logo/logo.webp" alt="Endema Logo" width="280" height="20"/>
<img class="logo__img-secondary" src="https://endema.com.tr/wp-content/themes/endema/img/assets/logo/logo.webp" alt="Endema Logo" width="280" height="20"/>
</div></a>
</section>
</div>
<div class="col-lg-3 footer__column text-center text-lg-right order-lg-3">
<section class="widget widget_rhye_social">
<ul class="social">
<li class="social__item"><a class="fa fa-instagram" href="https://www.instagram.com/endemashipyard/"></a></li>
<li class="social__item"><a class="fa fa-linkedin" href="https://tr.linkedin.com/company/endema-shipyard"></a></li>
</ul>
</section>
</div>
<div class="col-lg-6 footer__column text-center text-lg-center order-lg-2">
<section class="widget widget_text">
<div class="textwidget">
<p class="footeryazı"><small>2024 Endema Shipyard. All Rights Reserved.</small></p>
</div>
</section>
</div>
</div>
</div>
</footer>
 </div>
 </div>
</main>
    <script id="list-hover-vs" type="x-shader/x-vertex">
        uniform vec2 uOffset;
        varying vec2 vUv;
        vec3 deformationCurve(vec3 position, vec2 uv, vec2 offset) {
            float M_PI = 3.1415926535897932384626433832795;
            position.x = position.x + (sin(uv.y * M_PI) * offset.x);
            position.y = position.y + (sin(uv.x * M_PI) * offset.y);
            return position;
        }
        void main() {
            vUv =  uv + (uOffset * 2.);
            vec3 newPosition = position;
            newPosition = deformationCurve(position,uv,uOffset);
            gl_Position = projectionMatrix * modelViewMatrix * vec4( newPosition, 1.0 );
        }
    </script>
    <script id="list-hover-fs" type="x-shader/x-fragment">
        uniform sampler2D uTexture;
        uniform float uAlpha;
        uniform float uScale;
        varying vec2 vUv;
        vec2 scaleUV(vec2 uv,float scale) {
            float center = 0.5;
            return ((uv - center) * scale) + center;
        }
        void main() {
            vec3 color = texture2D(uTexture,scaleUV(vUv,uScale)).rgb;
            gl_FragColor = vec4(color,uAlpha);
        }
    </script>
    <script id="slider-textures-vs" type="x-shader/x-vertex">
        varying vec2 vUv;
        void main() {
            vUv = uv;
            gl_Position = projectionMatrix * modelViewMatrix * vec4( position, 1.0 );
        }
    </script>
    <script id="slider-textures-horizontal-fs" type="x-shader/x-fragment">
        varying vec2 vUv;
        uniform sampler2D texture;
        uniform sampler2D texture2;
        uniform sampler2D disp;
        uniform float dispFactor;
        uniform float effectFactor;
        void main() {
            vec2 uv = vUv;
            vec4 disp = texture2D(disp, uv);
            vec2 distortedPosition = vec2(uv.x + dispFactor * (disp.r*effectFactor), uv.y);
            vec2 distortedPosition2 = vec2(uv.x - (1.0 - dispFactor) * (disp.r*effectFactor), uv.y);
            vec4 _texture = texture2D(texture, distortedPosition);
            vec4 _texture2 = texture2D(texture2, distortedPosition2);
            vec4 finalTexture = mix(_texture, _texture2, dispFactor);
            gl_FragColor = finalTexture;
        }
    </script>
    <script id="slider-textures-vertical-fs" type="x-shader/x-fragment">
        varying vec2 vUv;
        uniform sampler2D texture;
        uniform sampler2D texture2;
        uniform sampler2D disp;
        uniform float dispFactor;
        uniform float effectFactor;
        void main() {
            vec2 uv = vUv;
            vec4 disp = texture2D(disp, uv);
            vec2 distortedPosition = vec2(uv.x, uv.y - dispFactor * (disp.r*effectFactor));
            vec2 distortedPosition2 = vec2(uv.x, uv.y + (1.0 - dispFactor) * (disp.r*effectFactor));
            vec4 _texture = texture2D(texture, distortedPosition);
            vec4 _texture2 = texture2D(texture2, distortedPosition2);
            vec4 finalTexture = mix(_texture, _texture2, dispFactor);
            gl_FragColor = finalTexture;
        }
    </script>
<script src="https://endema.com.tr/wp-content/themes/endema/js/vendor.js"></script>
<script src="https://endema.com.tr/wp-content/themes/endema/js/components.js"></script>
</body>
</html>

<?php elseif (is_page('contact')) : ?>

<footer class="footer container-fluid bg-dark-1" id="page-footer" data-arts-theme-text="light" data-arts-footer-logo="primary">
<div class="footer__area pt-md-5 pt-sm-3 pb-md-3 pb-sm-1 pt-2 pb-0">
<div class="row align-items-center">
<div class="col-lg-3 footer__column text-center text-lg-left order-lg-1">
<section class="widget widget_rhye_logo">
<a class="logo" href="">
<div class="logo__wrapper-img">
<img class="logo__img-primary" src="https://endema.com.tr/wp-content/themes/endema/img/assets/logo/logo.webp" alt="Endema Logo" width="280" height="20"/>
<img class="logo__img-secondary" src="https://endema.com.tr/wp-content/themes/endema/img/assets/logo/logo.webp" alt="Endema Logo" width="280" height="20"/>
</div></a>
</section>
</div>
<div class="col-lg-3 footer__column text-center text-lg-right order-lg-3">
<section class="widget widget_rhye_social">
<ul class="social">
<li class="social__item"><a class="fa fa-instagram" href="https://www.instagram.com/endemashipyard/"></a></li>
<li class="social__item"><a class="fa fa-linkedin" href="https://tr.linkedin.com/company/endema-shipyard"></a></li>
</ul>
</section>
</div>
<div class="col-lg-6 footer__column text-center text-lg-center order-lg-2">
<section class="widget widget_text">
<div class="textwidget">
<p class="footeryazı"><small>2024 Endema Shipyard. All Rights Reserved.</small></p>
</div>
</section>
</div>
</div>
</div>
</footer>
 </div>
 </div>
</main>
    <script id="list-hover-vs" type="x-shader/x-vertex">
        uniform vec2 uOffset;
        varying vec2 vUv;
        vec3 deformationCurve(vec3 position, vec2 uv, vec2 offset) {
            float M_PI = 3.1415926535897932384626433832795;
            position.x = position.x + (sin(uv.y * M_PI) * offset.x);
            position.y = position.y + (sin(uv.x * M_PI) * offset.y);
            return position;
        }
        void main() {
            vUv =  uv + (uOffset * 2.);
            vec3 newPosition = position;
            newPosition = deformationCurve(position,uv,uOffset);
            gl_Position = projectionMatrix * modelViewMatrix * vec4( newPosition, 1.0 );
        }
    </script>
    <script id="list-hover-fs" type="x-shader/x-fragment">
        uniform sampler2D uTexture;
        uniform float uAlpha;
        uniform float uScale;
        varying vec2 vUv;
        vec2 scaleUV(vec2 uv,float scale) {
            float center = 0.5;
            return ((uv - center) * scale) + center;
        }
        void main() {
            vec3 color = texture2D(uTexture,scaleUV(vUv,uScale)).rgb;
            gl_FragColor = vec4(color,uAlpha);
        }
    </script>
    <script id="slider-textures-vs" type="x-shader/x-vertex">
        varying vec2 vUv;
        void main() {
            vUv = uv;
            gl_Position = projectionMatrix * modelViewMatrix * vec4( position, 1.0 );
        }
    </script>
    <script id="slider-textures-horizontal-fs" type="x-shader/x-fragment">
        varying vec2 vUv;
        uniform sampler2D texture;
        uniform sampler2D texture2;
        uniform sampler2D disp;
        uniform float dispFactor;
        uniform float effectFactor;
        void main() {
            vec2 uv = vUv;
            vec4 disp = texture2D(disp, uv);
            vec2 distortedPosition = vec2(uv.x + dispFactor * (disp.r*effectFactor), uv.y);
            vec2 distortedPosition2 = vec2(uv.x - (1.0 - dispFactor) * (disp.r*effectFactor), uv.y);
            vec4 _texture = texture2D(texture, distortedPosition);
            vec4 _texture2 = texture2D(texture2, distortedPosition2);
            vec4 finalTexture = mix(_texture, _texture2, dispFactor);
            gl_FragColor = finalTexture;
        }
    </script>
    <script id="slider-textures-vertical-fs" type="x-shader/x-fragment">
        varying vec2 vUv;
        uniform sampler2D texture;
        uniform sampler2D texture2;
        uniform sampler2D disp;
        uniform float dispFactor;
        uniform float effectFactor;
        void main() {
            vec2 uv = vUv;
            vec4 disp = texture2D(disp, uv);
            vec2 distortedPosition = vec2(uv.x, uv.y - dispFactor * (disp.r*effectFactor));
            vec2 distortedPosition2 = vec2(uv.x, uv.y + (1.0 - dispFactor) * (disp.r*effectFactor));
            vec4 _texture = texture2D(texture, distortedPosition);
            vec4 _texture2 = texture2D(texture2, distortedPosition2);
            vec4 finalTexture = mix(_texture, _texture2, dispFactor);
            gl_FragColor = finalTexture;
        }
    </script>
<script src="https://endema.com.tr/wp-content/themes/endema/js/vendor.js"></script>
<script src="https://endema.com.tr/wp-content/themes/endema/js/components.js"></script>
</body>
</html>

<?php elseif (is_page('refit')) : ?>

<footer class="footer container-fluid bg-dark-1" id="page-footer" data-arts-theme-text="light" data-arts-footer-logo="primary">
<div class="footer__area pt-md-5 pt-sm-3 pb-md-3 pb-sm-1 pt-2 pb-0">
<div class="row align-items-center">
<div class="col-lg-3 footer__column text-center text-lg-left order-lg-1">
<section class="widget widget_rhye_logo">
<a class="logo" href="">
<div class="logo__wrapper-img">
<img class="logo__img-primary" src="https://endema.com.tr/wp-content/themes/endema/img/assets/logo/logo.webp" alt="Endema Logo" width="280" height="20"/>
<img class="logo__img-secondary" src="https://endema.com.tr/wp-content/themes/endema/img/assets/logo/logo.webp" alt="Endema Logo" width="280" height="20"/>
</div></a>
</section>
</div>
<div class="col-lg-3 footer__column text-center text-lg-right order-lg-3">
<section class="widget widget_rhye_social">
<ul class="social">
<li class="social__item"><a class="fa fa-instagram" href="https://www.instagram.com/endemashipyard/"></a></li>
<li class="social__item"><a class="fa fa-linkedin" href="https://tr.linkedin.com/company/endema-shipyard"></a></li>
</ul>
</section>
</div>
<div class="col-lg-6 footer__column text-center text-lg-center order-lg-2">
<section class="widget widget_text">
<div class="textwidget">
<p class="footeryazı"><small>2024 Endema Shipyard. All Rights Reserved.</small></p>
</div>
</section>
</div>
</div>
</div>
</footer>
 </div>
 </div>
</main>
    <script id="list-hover-vs" type="x-shader/x-vertex">
        uniform vec2 uOffset;
        varying vec2 vUv;
        vec3 deformationCurve(vec3 position, vec2 uv, vec2 offset) {
            float M_PI = 3.1415926535897932384626433832795;
            position.x = position.x + (sin(uv.y * M_PI) * offset.x);
            position.y = position.y + (sin(uv.x * M_PI) * offset.y);
            return position;
        }
        void main() {
            vUv =  uv + (uOffset * 2.);
            vec3 newPosition = position;
            newPosition = deformationCurve(position,uv,uOffset);
            gl_Position = projectionMatrix * modelViewMatrix * vec4( newPosition, 1.0 );
        }
    </script>
    <script id="list-hover-fs" type="x-shader/x-fragment">
        uniform sampler2D uTexture;
        uniform float uAlpha;
        uniform float uScale;
        varying vec2 vUv;
        vec2 scaleUV(vec2 uv,float scale) {
            float center = 0.5;
            return ((uv - center) * scale) + center;
        }
        void main() {
            vec3 color = texture2D(uTexture,scaleUV(vUv,uScale)).rgb;
            gl_FragColor = vec4(color,uAlpha);
        }
    </script>
    <script id="slider-textures-vs" type="x-shader/x-vertex">
        varying vec2 vUv;
        void main() {
            vUv = uv;
            gl_Position = projectionMatrix * modelViewMatrix * vec4( position, 1.0 );
        }
    </script>
    <script id="slider-textures-horizontal-fs" type="x-shader/x-fragment">
        varying vec2 vUv;
        uniform sampler2D texture;
        uniform sampler2D texture2;
        uniform sampler2D disp;
        uniform float dispFactor;
        uniform float effectFactor;
        void main() {
            vec2 uv = vUv;
            vec4 disp = texture2D(disp, uv);
            vec2 distortedPosition = vec2(uv.x + dispFactor * (disp.r*effectFactor), uv.y);
            vec2 distortedPosition2 = vec2(uv.x - (1.0 - dispFactor) * (disp.r*effectFactor), uv.y);
            vec4 _texture = texture2D(texture, distortedPosition);
            vec4 _texture2 = texture2D(texture2, distortedPosition2);
            vec4 finalTexture = mix(_texture, _texture2, dispFactor);
            gl_FragColor = finalTexture;
        }
    </script>
    <script id="slider-textures-vertical-fs" type="x-shader/x-fragment">
        varying vec2 vUv;
        uniform sampler2D texture;
        uniform sampler2D texture2;
        uniform sampler2D disp;
        uniform float dispFactor;
        uniform float effectFactor;
        void main() {
            vec2 uv = vUv;
            vec4 disp = texture2D(disp, uv);
            vec2 distortedPosition = vec2(uv.x, uv.y - dispFactor * (disp.r*effectFactor));
            vec2 distortedPosition2 = vec2(uv.x, uv.y + (1.0 - dispFactor) * (disp.r*effectFactor));
            vec4 _texture = texture2D(texture, distortedPosition);
            vec4 _texture2 = texture2D(texture2, distortedPosition2);
            vec4 finalTexture = mix(_texture, _texture2, dispFactor);
            gl_FragColor = finalTexture;
        }
    </script>
<script src="https://endema.com.tr/wp-content/themes/endema/js/endema.js"></script>
<script src="https://endema.com.tr/wp-content/themes/endema/js/vendor.js"></script>
<script src="https://endema.com.tr/wp-content/themes/endema/js/components.js"></script>
</body>
</html>

<?php elseif (is_page('contact')) : ?>


    <footer class="footer container-fluid bg-dark-1" id="page-footer" data-arts-theme-text="light" data-arts-footer-logo="primary">
<div class="footer__area pt-md-5 pt-sm-3 pb-md-3 pb-sm-1 pt-2 pb-0">
<div class="row align-items-center">
<div class="col-lg-3 footer__column text-center text-lg-left order-lg-1">
<section class="widget widget_rhye_logo">
<a class="logo" href="">
<div class="logo__wrapper-img">
<img class="logo__img-primary" src="https://endema.com.tr/wp-content/themes/endema/img/assets/logo/logo.webp" alt="Endema Logo" width="280" height="20"/>
<img class="logo__img-secondary" src="https://endema.com.tr/wp-content/themes/endema/img/assets/logo/logo.webp" alt="Endema Logo" width="280" height="20"/>
</div></a>
</section>
</div>
<div class="col-lg-3 footer__column text-center text-lg-right order-lg-3">
<section class="widget widget_rhye_social">
<ul class="social">
<li class="social__item"><a class="fa fa-instagram" href="https://www.instagram.com/endemashipyard/"></a></li>
<li class="social__item"><a class="fa fa-linkedin" href="https://tr.linkedin.com/company/endema-shipyard"></a></li>
</ul>
</section>
</div>
<div class="col-lg-6 footer__column text-center text-lg-center order-lg-2">
<section class="widget widget_text">
<div class="textwidget">
<p class="footeryazı"><small>2024 Endema Shipyard. All Rights Reserved.</small></p>
</div>
</section>
</div>
</div>
</div>
</footer>
 </div>
 </div>
</main>
    <script id="list-hover-vs" type="x-shader/x-vertex">
        uniform vec2 uOffset;
        varying vec2 vUv;
        vec3 deformationCurve(vec3 position, vec2 uv, vec2 offset) {
            float M_PI = 3.1415926535897932384626433832795;
            position.x = position.x + (sin(uv.y * M_PI) * offset.x);
            position.y = position.y + (sin(uv.x * M_PI) * offset.y);
            return position;
        }
        void main() {
            vUv =  uv + (uOffset * 2.);
            vec3 newPosition = position;
            newPosition = deformationCurve(position,uv,uOffset);
            gl_Position = projectionMatrix * modelViewMatrix * vec4( newPosition, 1.0 );
        }
    </script>
    <script id="list-hover-fs" type="x-shader/x-fragment">
        uniform sampler2D uTexture;
        uniform float uAlpha;
        uniform float uScale;
        varying vec2 vUv;
        vec2 scaleUV(vec2 uv,float scale) {
            float center = 0.5;
            return ((uv - center) * scale) + center;
        }
        void main() {
            vec3 color = texture2D(uTexture,scaleUV(vUv,uScale)).rgb;
            gl_FragColor = vec4(color,uAlpha);
        }
    </script>
    <script id="slider-textures-vs" type="x-shader/x-vertex">
        varying vec2 vUv;
        void main() {
            vUv = uv;
            gl_Position = projectionMatrix * modelViewMatrix * vec4( position, 1.0 );
        }
    </script>
    <script id="slider-textures-horizontal-fs" type="x-shader/x-fragment">
        varying vec2 vUv;
        uniform sampler2D texture;
        uniform sampler2D texture2;
        uniform sampler2D disp;
        uniform float dispFactor;
        uniform float effectFactor;
        void main() {
            vec2 uv = vUv;
            vec4 disp = texture2D(disp, uv);
            vec2 distortedPosition = vec2(uv.x + dispFactor * (disp.r*effectFactor), uv.y);
            vec2 distortedPosition2 = vec2(uv.x - (1.0 - dispFactor) * (disp.r*effectFactor), uv.y);
            vec4 _texture = texture2D(texture, distortedPosition);
            vec4 _texture2 = texture2D(texture2, distortedPosition2);
            vec4 finalTexture = mix(_texture, _texture2, dispFactor);
            gl_FragColor = finalTexture;
        }
    </script>
    <script id="slider-textures-vertical-fs" type="x-shader/x-fragment">
        varying vec2 vUv;
        uniform sampler2D texture;
        uniform sampler2D texture2;
        uniform sampler2D disp;
        uniform float dispFactor;
        uniform float effectFactor;
        void main() {
            vec2 uv = vUv;
            vec4 disp = texture2D(disp, uv);
            vec2 distortedPosition = vec2(uv.x, uv.y - dispFactor * (disp.r*effectFactor));
            vec2 distortedPosition2 = vec2(uv.x, uv.y + (1.0 - dispFactor) * (disp.r*effectFactor));
            vec4 _texture = texture2D(texture, distortedPosition);
            vec4 _texture2 = texture2D(texture2, distortedPosition2);
            vec4 finalTexture = mix(_texture, _texture2, dispFactor);
            gl_FragColor = finalTexture;
        }
    </script>
<script src="https://endema.com.tr/wp-content/themes/endema/js/vendor.js"></script>
<script src="https://endema.com.tr/wp-content/themes/endema/js/components.js"></script>
</body>
</html>




<!-- NEWBUILD V1 -->
<?php elseif (is_page('ocean90')) : ?>
<footer class="footer container-fluid bg-dark-1" id="page-footer" data-arts-theme-text="light" data-arts-footer-logo="primary">
<div class="footer__area pt-md-5 pt-sm-3 pb-md-3 pb-sm-1 pt-2 pb-0">
<div class="row align-items-center">
<div class="col-lg-3 footer__column text-center text-lg-left order-lg-1">
<section class="widget widget_rhye_logo">
<a class="logo" href="">
<div class="logo__wrapper-img">
<img class="logo__img-primary" src="https://endema.com.tr/wp-content/themes/endema/img/assets/logo/logo.webp" alt="Endema Logo" width="280" height="20"/>
<img class="logo__img-secondary" src="https://endema.com.tr/wp-content/themes/endema/img/assets/logo/logo.webp" alt="Endema Logo" width="280" height="20"/>
</div></a>
</section>
</div>
<div class="col-lg-3 footer__column text-center text-lg-right order-lg-3">
<section class="widget widget_rhye_social">
<ul class="social">
<li class="social__item"><a class="fa fa-instagram" href="https://www.instagram.com/endemashipyard/"></a></li>
<li class="social__item"><a class="fa fa-linkedin" href="https://tr.linkedin.com/company/endema-shipyard"></a></li>
</ul>
</section>
</div>
<div class="col-lg-6 footer__column text-center text-lg-center order-lg-2">
<section class="widget widget_text">
<div class="textwidget">
<p class="footeryazı"><small>2024 Endema Shipyard. All Rights Reserved.</small></p>
</div>
</section>
</div>
</div>
</div>
</footer>
 </div>
 </div>
</main>
    <script id="list-hover-vs" type="x-shader/x-vertex">
        uniform vec2 uOffset;
        varying vec2 vUv;
        vec3 deformationCurve(vec3 position, vec2 uv, vec2 offset) {
            float M_PI = 3.1415926535897932384626433832795;
            position.x = position.x + (sin(uv.y * M_PI) * offset.x);
            position.y = position.y + (sin(uv.x * M_PI) * offset.y);
            return position;
        }
        void main() {
            vUv =  uv + (uOffset * 2.);
            vec3 newPosition = position;
            newPosition = deformationCurve(position,uv,uOffset);
            gl_Position = projectionMatrix * modelViewMatrix * vec4( newPosition, 1.0 );
        }
    </script>
    <script id="list-hover-fs" type="x-shader/x-fragment">
        uniform sampler2D uTexture;
        uniform float uAlpha;
        uniform float uScale;
        varying vec2 vUv;
        vec2 scaleUV(vec2 uv,float scale) {
            float center = 0.5;
            return ((uv - center) * scale) + center;
        }
        void main() {
            vec3 color = texture2D(uTexture,scaleUV(vUv,uScale)).rgb;
            gl_FragColor = vec4(color,uAlpha);
        }
    </script>
    <script id="slider-textures-vs" type="x-shader/x-vertex">
        varying vec2 vUv;
        void main() {
            vUv = uv;
            gl_Position = projectionMatrix * modelViewMatrix * vec4( position, 1.0 );
        }
    </script>
    <script id="slider-textures-horizontal-fs" type="x-shader/x-fragment">
        varying vec2 vUv;
        uniform sampler2D texture;
        uniform sampler2D texture2;
        uniform sampler2D disp;
        uniform float dispFactor;
        uniform float effectFactor;
        void main() {
            vec2 uv = vUv;
            vec4 disp = texture2D(disp, uv);
            vec2 distortedPosition = vec2(uv.x + dispFactor * (disp.r*effectFactor), uv.y);
            vec2 distortedPosition2 = vec2(uv.x - (1.0 - dispFactor) * (disp.r*effectFactor), uv.y);
            vec4 _texture = texture2D(texture, distortedPosition);
            vec4 _texture2 = texture2D(texture2, distortedPosition2);
            vec4 finalTexture = mix(_texture, _texture2, dispFactor);
            gl_FragColor = finalTexture;
        }
    </script>
    <script id="slider-textures-vertical-fs" type="x-shader/x-fragment">
        varying vec2 vUv;
        uniform sampler2D texture;
        uniform sampler2D texture2;
        uniform sampler2D disp;
        uniform float dispFactor;
        uniform float effectFactor;
        void main() {
            vec2 uv = vUv;
            vec4 disp = texture2D(disp, uv);
            vec2 distortedPosition = vec2(uv.x, uv.y - dispFactor * (disp.r*effectFactor));
            vec2 distortedPosition2 = vec2(uv.x, uv.y + (1.0 - dispFactor) * (disp.r*effectFactor));
            vec4 _texture = texture2D(texture, distortedPosition);
            vec4 _texture2 = texture2D(texture2, distortedPosition2);
            vec4 finalTexture = mix(_texture, _texture2, dispFactor);
            gl_FragColor = finalTexture;
        }
    </script>
<script src="https://endema.com.tr/wp-content/themes/endema/js/vendor.js"></script>
<script src="https://endema.com.tr/wp-content/themes/endema/js/components.js"></script>
</body>
</html>
<!-- NEWBUILD V1 -->

<?php elseif (is_page('rasha')) : ?>
    <footer class="footer container-fluid bg-dark-1" id="page-footer" data-arts-theme-text="light" data-arts-footer-logo="primary">
<div class="footer__area pt-md-5 pt-sm-3 pb-md-3 pb-sm-1 pt-2 pb-0">
<div class="row align-items-center">
<div class="col-lg-3 footer__column text-center text-lg-left order-lg-1">
<section class="widget widget_rhye_logo">
<a class="logo" href="">
<div class="logo__wrapper-img">
<img class="logo__img-primary" src="https://endema.com.tr/wp-content/themes/endema/img/assets/logo/logo.webp" alt="Endema Logo" width="280" height="20"/>
<img class="logo__img-secondary" src="https://endema.com.tr/wp-content/themes/endema/img/assets/logo/logo.webp" alt="Endema Logo" width="280" height="20"/>
</div></a>
</section>
</div>
<div class="col-lg-3 footer__column text-center text-lg-right order-lg-3">
<section class="widget widget_rhye_social">
<ul class="social">
<li class="social__item"><a class="fa fa-instagram" href="https://www.instagram.com/endemashipyard/"></a></li>
<li class="social__item"><a class="fa fa-linkedin" href="https://tr.linkedin.com/company/endema-shipyard"></a></li>
</ul>
</section>
</div>
<div class="col-lg-6 footer__column text-center text-lg-center order-lg-2">
<section class="widget widget_text">
<div class="textwidget">
<p class="footeryazı"><small>2024 Endema Shipyard. All Rights Reserved.</small></p>
</div>
</section>
</div>
</div>
</div>
</footer>
 </div>
 </div>
</main>
    <script id="list-hover-vs" type="x-shader/x-vertex">
        uniform vec2 uOffset;
        varying vec2 vUv;
        vec3 deformationCurve(vec3 position, vec2 uv, vec2 offset) {
            float M_PI = 3.1415926535897932384626433832795;
            position.x = position.x + (sin(uv.y * M_PI) * offset.x);
            position.y = position.y + (sin(uv.x * M_PI) * offset.y);
            return position;
        }
        void main() {
            vUv =  uv + (uOffset * 2.);
            vec3 newPosition = position;
            newPosition = deformationCurve(position,uv,uOffset);
            gl_Position = projectionMatrix * modelViewMatrix * vec4( newPosition, 1.0 );
        }
    </script>
    <script id="list-hover-fs" type="x-shader/x-fragment">
        uniform sampler2D uTexture;
        uniform float uAlpha;
        uniform float uScale;
        varying vec2 vUv;
        vec2 scaleUV(vec2 uv,float scale) {
            float center = 0.5;
            return ((uv - center) * scale) + center;
        }
        void main() {
            vec3 color = texture2D(uTexture,scaleUV(vUv,uScale)).rgb;
            gl_FragColor = vec4(color,uAlpha);
        }
    </script>
    <script id="slider-textures-vs" type="x-shader/x-vertex">
        varying vec2 vUv;
        void main() {
            vUv = uv;
            gl_Position = projectionMatrix * modelViewMatrix * vec4( position, 1.0 );
        }
    </script>
    <script id="slider-textures-horizontal-fs" type="x-shader/x-fragment">
        varying vec2 vUv;
        uniform sampler2D texture;
        uniform sampler2D texture2;
        uniform sampler2D disp;
        uniform float dispFactor;
        uniform float effectFactor;
        void main() {
            vec2 uv = vUv;
            vec4 disp = texture2D(disp, uv);
            vec2 distortedPosition = vec2(uv.x + dispFactor * (disp.r*effectFactor), uv.y);
            vec2 distortedPosition2 = vec2(uv.x - (1.0 - dispFactor) * (disp.r*effectFactor), uv.y);
            vec4 _texture = texture2D(texture, distortedPosition);
            vec4 _texture2 = texture2D(texture2, distortedPosition2);
            vec4 finalTexture = mix(_texture, _texture2, dispFactor);
            gl_FragColor = finalTexture;
        }
    </script>
    <script id="slider-textures-vertical-fs" type="x-shader/x-fragment">
        varying vec2 vUv;
        uniform sampler2D texture;
        uniform sampler2D texture2;
        uniform sampler2D disp;
        uniform float dispFactor;
        uniform float effectFactor;
        void main() {
            vec2 uv = vUv;
            vec4 disp = texture2D(disp, uv);
            vec2 distortedPosition = vec2(uv.x, uv.y - dispFactor * (disp.r*effectFactor));
            vec2 distortedPosition2 = vec2(uv.x, uv.y + (1.0 - dispFactor) * (disp.r*effectFactor));
            vec4 _texture = texture2D(texture, distortedPosition);
            vec4 _texture2 = texture2D(texture2, distortedPosition2);
            vec4 finalTexture = mix(_texture, _texture2, dispFactor);
            gl_FragColor = finalTexture;
        }
    </script>
<script src="https://endema.com.tr/wp-content/themes/endema/js/vendor.js"></script>
<script src="https://endema.com.tr/wp-content/themes/endema/js/components.js"></script>
</body>
</html>
    <?php elseif (is_page('mystereab')) : ?>
        <footer class="footer container-fluid bg-dark-1" id="page-footer" data-arts-theme-text="light" data-arts-footer-logo="primary">
<div class="footer__area pt-md-5 pt-sm-3 pb-md-3 pb-sm-1 pt-2 pb-0">
<div class="row align-items-center">
<div class="col-lg-3 footer__column text-center text-lg-left order-lg-1">
<section class="widget widget_rhye_logo">
<a class="logo" href="">
<div class="logo__wrapper-img">
<img class="logo__img-primary" src="https://endema.com.tr/wp-content/themes/endema/img/assets/logo/logo.webp" alt="Endema Logo" width="280" height="20"/>
<img class="logo__img-secondary" src="https://endema.com.tr/wp-content/themes/endema/img/assets/logo/logo.webp" alt="Endema Logo" width="280" height="20"/>
</div></a>
</section>
</div>
<div class="col-lg-3 footer__column text-center text-lg-right order-lg-3">
<section class="widget widget_rhye_social">
<ul class="social">
<li class="social__item"><a class="fa fa-instagram" href="https://www.instagram.com/endemashipyard/"></a></li>
<li class="social__item"><a class="fa fa-linkedin" href="https://tr.linkedin.com/company/endema-shipyard"></a></li>
</ul>
</section>
</div>
<div class="col-lg-6 footer__column text-center text-lg-center order-lg-2">
<section class="widget widget_text">
<div class="textwidget">
<p class="footeryazı"><small>2024 Endema Shipyard. All Rights Reserved.</small></p>
</div>
</section>
</div>
</div>
</div>
</footer>
 </div>
 </div>
</main>
    <script id="list-hover-vs" type="x-shader/x-vertex">
        uniform vec2 uOffset;
        varying vec2 vUv;
        vec3 deformationCurve(vec3 position, vec2 uv, vec2 offset) {
            float M_PI = 3.1415926535897932384626433832795;
            position.x = position.x + (sin(uv.y * M_PI) * offset.x);
            position.y = position.y + (sin(uv.x * M_PI) * offset.y);
            return position;
        }
        void main() {
            vUv =  uv + (uOffset * 2.);
            vec3 newPosition = position;
            newPosition = deformationCurve(position,uv,uOffset);
            gl_Position = projectionMatrix * modelViewMatrix * vec4( newPosition, 1.0 );
        }
    </script>
    <script id="list-hover-fs" type="x-shader/x-fragment">
        uniform sampler2D uTexture;
        uniform float uAlpha;
        uniform float uScale;
        varying vec2 vUv;
        vec2 scaleUV(vec2 uv,float scale) {
            float center = 0.5;
            return ((uv - center) * scale) + center;
        }
        void main() {
            vec3 color = texture2D(uTexture,scaleUV(vUv,uScale)).rgb;
            gl_FragColor = vec4(color,uAlpha);
        }
    </script>
    <script id="slider-textures-vs" type="x-shader/x-vertex">
        varying vec2 vUv;
        void main() {
            vUv = uv;
            gl_Position = projectionMatrix * modelViewMatrix * vec4( position, 1.0 );
        }
    </script>
    <script id="slider-textures-horizontal-fs" type="x-shader/x-fragment">
        varying vec2 vUv;
        uniform sampler2D texture;
        uniform sampler2D texture2;
        uniform sampler2D disp;
        uniform float dispFactor;
        uniform float effectFactor;
        void main() {
            vec2 uv = vUv;
            vec4 disp = texture2D(disp, uv);
            vec2 distortedPosition = vec2(uv.x + dispFactor * (disp.r*effectFactor), uv.y);
            vec2 distortedPosition2 = vec2(uv.x - (1.0 - dispFactor) * (disp.r*effectFactor), uv.y);
            vec4 _texture = texture2D(texture, distortedPosition);
            vec4 _texture2 = texture2D(texture2, distortedPosition2);
            vec4 finalTexture = mix(_texture, _texture2, dispFactor);
            gl_FragColor = finalTexture;
        }
    </script>
    <script id="slider-textures-vertical-fs" type="x-shader/x-fragment">
        varying vec2 vUv;
        uniform sampler2D texture;
        uniform sampler2D texture2;
        uniform sampler2D disp;
        uniform float dispFactor;
        uniform float effectFactor;
        void main() {
            vec2 uv = vUv;
            vec4 disp = texture2D(disp, uv);
            vec2 distortedPosition = vec2(uv.x, uv.y - dispFactor * (disp.r*effectFactor));
            vec2 distortedPosition2 = vec2(uv.x, uv.y + (1.0 - dispFactor) * (disp.r*effectFactor));
            vec4 _texture = texture2D(texture, distortedPosition);
            vec4 _texture2 = texture2D(texture2, distortedPosition2);
            vec4 finalTexture = mix(_texture, _texture2, dispFactor);
            gl_FragColor = finalTexture;
        }
    </script>
<script src="https://endema.com.tr/wp-content/themes/endema/js/vendor.js"></script>
<script src="https://endema.com.tr/wp-content/themes/endema/js/components.js"></script>
</body>
</html>
        <?php elseif (is_page('liberta')) : ?>
            <footer class="footer container-fluid bg-dark-1" id="page-footer" data-arts-theme-text="light" data-arts-footer-logo="primary">
<div class="footer__area pt-md-5 pt-sm-3 pb-md-3 pb-sm-1 pt-2 pb-0">
<div class="row align-items-center">
<div class="col-lg-3 footer__column text-center text-lg-left order-lg-1">
<section class="widget widget_rhye_logo">
<a class="logo" href="">
<div class="logo__wrapper-img">
<img class="logo__img-primary" src="https://endema.com.tr/wp-content/themes/endema/img/assets/logo/logo.webp" alt="Endema Logo" width="280" height="20"/>
<img class="logo__img-secondary" src="https://endema.com.tr/wp-content/themes/endema/img/assets/logo/logo.webp" alt="Endema Logo" width="280" height="20"/>
</div></a>
</section>
</div>
<div class="col-lg-3 footer__column text-center text-lg-right order-lg-3">
<section class="widget widget_rhye_social">
<ul class="social">
<li class="social__item"><a class="fa fa-instagram" href="https://www.instagram.com/endemashipyard/"></a></li>
<li class="social__item"><a class="fa fa-linkedin" href="https://tr.linkedin.com/company/endema-shipyard"></a></li>
</ul>
</section>
</div>
<div class="col-lg-6 footer__column text-center text-lg-center order-lg-2">
<section class="widget widget_text">
<div class="textwidget">
<p class="footeryazı"><small>2024 Endema Shipyard. All Rights Reserved.</small></p>
</div>
</section>
</div>
</div>
</div>
</footer>
 </div>
 </div>
</main>
    <script id="list-hover-vs" type="x-shader/x-vertex">
        uniform vec2 uOffset;
        varying vec2 vUv;
        vec3 deformationCurve(vec3 position, vec2 uv, vec2 offset) {
            float M_PI = 3.1415926535897932384626433832795;
            position.x = position.x + (sin(uv.y * M_PI) * offset.x);
            position.y = position.y + (sin(uv.x * M_PI) * offset.y);
            return position;
        }
        void main() {
            vUv =  uv + (uOffset * 2.);
            vec3 newPosition = position;
            newPosition = deformationCurve(position,uv,uOffset);
            gl_Position = projectionMatrix * modelViewMatrix * vec4( newPosition, 1.0 );
        }
    </script>
    <script id="list-hover-fs" type="x-shader/x-fragment">
        uniform sampler2D uTexture;
        uniform float uAlpha;
        uniform float uScale;
        varying vec2 vUv;
        vec2 scaleUV(vec2 uv,float scale) {
            float center = 0.5;
            return ((uv - center) * scale) + center;
        }
        void main() {
            vec3 color = texture2D(uTexture,scaleUV(vUv,uScale)).rgb;
            gl_FragColor = vec4(color,uAlpha);
        }
    </script>
    <script id="slider-textures-vs" type="x-shader/x-vertex">
        varying vec2 vUv;
        void main() {
            vUv = uv;
            gl_Position = projectionMatrix * modelViewMatrix * vec4( position, 1.0 );
        }
    </script>
    <script id="slider-textures-horizontal-fs" type="x-shader/x-fragment">
        varying vec2 vUv;
        uniform sampler2D texture;
        uniform sampler2D texture2;
        uniform sampler2D disp;
        uniform float dispFactor;
        uniform float effectFactor;
        void main() {
            vec2 uv = vUv;
            vec4 disp = texture2D(disp, uv);
            vec2 distortedPosition = vec2(uv.x + dispFactor * (disp.r*effectFactor), uv.y);
            vec2 distortedPosition2 = vec2(uv.x - (1.0 - dispFactor) * (disp.r*effectFactor), uv.y);
            vec4 _texture = texture2D(texture, distortedPosition);
            vec4 _texture2 = texture2D(texture2, distortedPosition2);
            vec4 finalTexture = mix(_texture, _texture2, dispFactor);
            gl_FragColor = finalTexture;
        }
    </script>
    <script id="slider-textures-vertical-fs" type="x-shader/x-fragment">
        varying vec2 vUv;
        uniform sampler2D texture;
        uniform sampler2D texture2;
        uniform sampler2D disp;
        uniform float dispFactor;
        uniform float effectFactor;
        void main() {
            vec2 uv = vUv;
            vec4 disp = texture2D(disp, uv);
            vec2 distortedPosition = vec2(uv.x, uv.y - dispFactor * (disp.r*effectFactor));
            vec2 distortedPosition2 = vec2(uv.x, uv.y + (1.0 - dispFactor) * (disp.r*effectFactor));
            vec4 _texture = texture2D(texture, distortedPosition);
            vec4 _texture2 = texture2D(texture2, distortedPosition2);
            vec4 finalTexture = mix(_texture, _texture2, dispFactor);
            gl_FragColor = finalTexture;
        }
    </script>
<script src="https://endema.com.tr/wp-content/themes/endema/js/vendor.js"></script>
<script src="https://endema.com.tr/wp-content/themes/endema/js/components.js"></script>
</body>
</html>
            <?php elseif (is_page('jafetica')) : ?>
                <footer class="footer container-fluid bg-dark-1" id="page-footer" data-arts-theme-text="light" data-arts-footer-logo="primary">
<div class="footer__area pt-md-5 pt-sm-3 pb-md-3 pb-sm-1 pt-2 pb-0">
<div class="row align-items-center">
<div class="col-lg-3 footer__column text-center text-lg-left order-lg-1">
<section class="widget widget_rhye_logo">
<a class="logo" href="">
<div class="logo__wrapper-img">
<img class="logo__img-primary" src="https://endema.com.tr/wp-content/themes/endema/img/assets/logo/logo.webp" alt="Endema Logo" width="280" height="20"/>
<img class="logo__img-secondary" src="https://endema.com.tr/wp-content/themes/endema/img/assets/logo/logo.webp" alt="Endema Logo" width="280" height="20"/>
</div></a>
</section>
</div>
<div class="col-lg-3 footer__column text-center text-lg-right order-lg-3">
<section class="widget widget_rhye_social">
<ul class="social">
<li class="social__item"><a class="fa fa-instagram" href="https://www.instagram.com/endemashipyard/"></a></li>
<li class="social__item"><a class="fa fa-linkedin" href="https://tr.linkedin.com/company/endema-shipyard"></a></li>
</ul>
</section>
</div>
<div class="col-lg-6 footer__column text-center text-lg-center order-lg-2">
<section class="widget widget_text">
<div class="textwidget">
<p class="footeryazı"><small>2024 Endema Shipyard. All Rights Reserved.</small></p>
</div>
</section>
</div>
</div>
</div>
</footer>
 </div>
 </div>
</main>
    <script id="list-hover-vs" type="x-shader/x-vertex">
        uniform vec2 uOffset;
        varying vec2 vUv;
        vec3 deformationCurve(vec3 position, vec2 uv, vec2 offset) {
            float M_PI = 3.1415926535897932384626433832795;
            position.x = position.x + (sin(uv.y * M_PI) * offset.x);
            position.y = position.y + (sin(uv.x * M_PI) * offset.y);
            return position;
        }
        void main() {
            vUv =  uv + (uOffset * 2.);
            vec3 newPosition = position;
            newPosition = deformationCurve(position,uv,uOffset);
            gl_Position = projectionMatrix * modelViewMatrix * vec4( newPosition, 1.0 );
        }
    </script>
    <script id="list-hover-fs" type="x-shader/x-fragment">
        uniform sampler2D uTexture;
        uniform float uAlpha;
        uniform float uScale;
        varying vec2 vUv;
        vec2 scaleUV(vec2 uv,float scale) {
            float center = 0.5;
            return ((uv - center) * scale) + center;
        }
        void main() {
            vec3 color = texture2D(uTexture,scaleUV(vUv,uScale)).rgb;
            gl_FragColor = vec4(color,uAlpha);
        }
    </script>
    <script id="slider-textures-vs" type="x-shader/x-vertex">
        varying vec2 vUv;
        void main() {
            vUv = uv;
            gl_Position = projectionMatrix * modelViewMatrix * vec4( position, 1.0 );
        }
    </script>
    <script id="slider-textures-horizontal-fs" type="x-shader/x-fragment">
        varying vec2 vUv;
        uniform sampler2D texture;
        uniform sampler2D texture2;
        uniform sampler2D disp;
        uniform float dispFactor;
        uniform float effectFactor;
        void main() {
            vec2 uv = vUv;
            vec4 disp = texture2D(disp, uv);
            vec2 distortedPosition = vec2(uv.x + dispFactor * (disp.r*effectFactor), uv.y);
            vec2 distortedPosition2 = vec2(uv.x - (1.0 - dispFactor) * (disp.r*effectFactor), uv.y);
            vec4 _texture = texture2D(texture, distortedPosition);
            vec4 _texture2 = texture2D(texture2, distortedPosition2);
            vec4 finalTexture = mix(_texture, _texture2, dispFactor);
            gl_FragColor = finalTexture;
        }
    </script>
    <script id="slider-textures-vertical-fs" type="x-shader/x-fragment">
        varying vec2 vUv;
        uniform sampler2D texture;
        uniform sampler2D texture2;
        uniform sampler2D disp;
        uniform float dispFactor;
        uniform float effectFactor;
        void main() {
            vec2 uv = vUv;
            vec4 disp = texture2D(disp, uv);
            vec2 distortedPosition = vec2(uv.x, uv.y - dispFactor * (disp.r*effectFactor));
            vec2 distortedPosition2 = vec2(uv.x, uv.y + (1.0 - dispFactor) * (disp.r*effectFactor));
            vec4 _texture = texture2D(texture, distortedPosition);
            vec4 _texture2 = texture2D(texture2, distortedPosition2);
            vec4 finalTexture = mix(_texture, _texture2, dispFactor);
            gl_FragColor = finalTexture;
        }
    </script>
<script src="https://endema.com.tr/wp-content/themes/endema/js/vendor.js"></script>
<script src="https://endema.com.tr/wp-content/themes/endema/js/components.js"></script>
</body>
</html>
                <?php elseif (is_page('ileria')) : ?>
                    <footer class="footer container-fluid bg-dark-1" id="page-footer" data-arts-theme-text="light" data-arts-footer-logo="primary">
<div class="footer__area pt-md-5 pt-sm-3 pb-md-3 pb-sm-1 pt-2 pb-0">
<div class="row align-items-center">
<div class="col-lg-3 footer__column text-center text-lg-left order-lg-1">
<section class="widget widget_rhye_logo">
<a class="logo" href="">
<div class="logo__wrapper-img">
<img class="logo__img-primary" src="https://endema.com.tr/wp-content/themes/endema/img/assets/logo/logo.webp" alt="Endema Logo" width="280" height="20"/>
<img class="logo__img-secondary" src="https://endema.com.tr/wp-content/themes/endema/img/assets/logo/logo.webp" alt="Endema Logo" width="280" height="20"/>
</div></a>
</section>
</div>
<div class="col-lg-3 footer__column text-center text-lg-right order-lg-3">
<section class="widget widget_rhye_social">
<ul class="social">
<li class="social__item"><a class="fa fa-instagram" href="https://www.instagram.com/endemashipyard/"></a></li>
<li class="social__item"><a class="fa fa-linkedin" href="https://tr.linkedin.com/company/endema-shipyard"></a></li>
</ul>
</section>
</div>
<div class="col-lg-6 footer__column text-center text-lg-center order-lg-2">
<section class="widget widget_text">
<div class="textwidget">
<p class="footeryazı"><small>2024 Endema Shipyard. All Rights Reserved.</small></p>
</div>
</section>
</div>
</div>
</div>
</footer>
 </div>
 </div>
</main>
    <script id="list-hover-vs" type="x-shader/x-vertex">
        uniform vec2 uOffset;
        varying vec2 vUv;
        vec3 deformationCurve(vec3 position, vec2 uv, vec2 offset) {
            float M_PI = 3.1415926535897932384626433832795;
            position.x = position.x + (sin(uv.y * M_PI) * offset.x);
            position.y = position.y + (sin(uv.x * M_PI) * offset.y);
            return position;
        }
        void main() {
            vUv =  uv + (uOffset * 2.);
            vec3 newPosition = position;
            newPosition = deformationCurve(position,uv,uOffset);
            gl_Position = projectionMatrix * modelViewMatrix * vec4( newPosition, 1.0 );
        }
    </script>
    <script id="list-hover-fs" type="x-shader/x-fragment">
        uniform sampler2D uTexture;
        uniform float uAlpha;
        uniform float uScale;
        varying vec2 vUv;
        vec2 scaleUV(vec2 uv,float scale) {
            float center = 0.5;
            return ((uv - center) * scale) + center;
        }
        void main() {
            vec3 color = texture2D(uTexture,scaleUV(vUv,uScale)).rgb;
            gl_FragColor = vec4(color,uAlpha);
        }
    </script>
    <script id="slider-textures-vs" type="x-shader/x-vertex">
        varying vec2 vUv;
        void main() {
            vUv = uv;
            gl_Position = projectionMatrix * modelViewMatrix * vec4( position, 1.0 );
        }
    </script>
    <script id="slider-textures-horizontal-fs" type="x-shader/x-fragment">
        varying vec2 vUv;
        uniform sampler2D texture;
        uniform sampler2D texture2;
        uniform sampler2D disp;
        uniform float dispFactor;
        uniform float effectFactor;
        void main() {
            vec2 uv = vUv;
            vec4 disp = texture2D(disp, uv);
            vec2 distortedPosition = vec2(uv.x + dispFactor * (disp.r*effectFactor), uv.y);
            vec2 distortedPosition2 = vec2(uv.x - (1.0 - dispFactor) * (disp.r*effectFactor), uv.y);
            vec4 _texture = texture2D(texture, distortedPosition);
            vec4 _texture2 = texture2D(texture2, distortedPosition2);
            vec4 finalTexture = mix(_texture, _texture2, dispFactor);
            gl_FragColor = finalTexture;
        }
    </script>
    <script id="slider-textures-vertical-fs" type="x-shader/x-fragment">
        varying vec2 vUv;
        uniform sampler2D texture;
        uniform sampler2D texture2;
        uniform sampler2D disp;
        uniform float dispFactor;
        uniform float effectFactor;
        void main() {
            vec2 uv = vUv;
            vec4 disp = texture2D(disp, uv);
            vec2 distortedPosition = vec2(uv.x, uv.y - dispFactor * (disp.r*effectFactor));
            vec2 distortedPosition2 = vec2(uv.x, uv.y + (1.0 - dispFactor) * (disp.r*effectFactor));
            vec4 _texture = texture2D(texture, distortedPosition);
            vec4 _texture2 = texture2D(texture2, distortedPosition2);
            vec4 finalTexture = mix(_texture, _texture2, dispFactor);
            gl_FragColor = finalTexture;
        }
    </script>
<script src="https://endema.com.tr/wp-content/themes/endema/js/vendor.js"></script>
<script src="https://endema.com.tr/wp-content/themes/endema/js/components.js"></script>
</body>
</html>
                    <?php elseif (is_page('4you')) : ?>
                        <footer class="footer container-fluid bg-dark-1" id="page-footer" data-arts-theme-text="light" data-arts-footer-logo="primary">
<div class="footer__area pt-md-5 pt-sm-3 pb-md-3 pb-sm-1 pt-2 pb-0">
<div class="row align-items-center">
<div class="col-lg-3 footer__column text-center text-lg-left order-lg-1">
<section class="widget widget_rhye_logo">
<a class="logo" href="">
<div class="logo__wrapper-img">
<img class="logo__img-primary" src="https://endema.com.tr/wp-content/themes/endema/img/assets/logo/logo.webp" alt="Endema Logo" width="280" height="20"/>
<img class="logo__img-secondary" src="https://endema.com.tr/wp-content/themes/endema/img/assets/logo/logo.webp" alt="Endema Logo" width="280" height="20"/>
</div></a>
</section>
</div>
<div class="col-lg-3 footer__column text-center text-lg-right order-lg-3">
<section class="widget widget_rhye_social">
<ul class="social">
<li class="social__item"><a class="fa fa-instagram" href="https://www.instagram.com/endemashipyard/"></a></li>
<li class="social__item"><a class="fa fa-linkedin" href="https://tr.linkedin.com/company/endema-shipyard"></a></li>
</ul>
</section>
</div>
<div class="col-lg-6 footer__column text-center text-lg-center order-lg-2">
<section class="widget widget_text">
<div class="textwidget">
<p class="footeryazı"><small>2024 Endema Shipyard. All Rights Reserved.</small></p>
</div>
</section>
</div>
</div>
</div>
</footer>
 </div>
 </div>
</main>
    <script id="list-hover-vs" type="x-shader/x-vertex">
        uniform vec2 uOffset;
        varying vec2 vUv;
        vec3 deformationCurve(vec3 position, vec2 uv, vec2 offset) {
            float M_PI = 3.1415926535897932384626433832795;
            position.x = position.x + (sin(uv.y * M_PI) * offset.x);
            position.y = position.y + (sin(uv.x * M_PI) * offset.y);
            return position;
        }
        void main() {
            vUv =  uv + (uOffset * 2.);
            vec3 newPosition = position;
            newPosition = deformationCurve(position,uv,uOffset);
            gl_Position = projectionMatrix * modelViewMatrix * vec4( newPosition, 1.0 );
        }
    </script>
    <script id="list-hover-fs" type="x-shader/x-fragment">
        uniform sampler2D uTexture;
        uniform float uAlpha;
        uniform float uScale;
        varying vec2 vUv;
        vec2 scaleUV(vec2 uv,float scale) {
            float center = 0.5;
            return ((uv - center) * scale) + center;
        }
        void main() {
            vec3 color = texture2D(uTexture,scaleUV(vUv,uScale)).rgb;
            gl_FragColor = vec4(color,uAlpha);
        }
    </script>
    <script id="slider-textures-vs" type="x-shader/x-vertex">
        varying vec2 vUv;
        void main() {
            vUv = uv;
            gl_Position = projectionMatrix * modelViewMatrix * vec4( position, 1.0 );
        }
    </script>
    <script id="slider-textures-horizontal-fs" type="x-shader/x-fragment">
        varying vec2 vUv;
        uniform sampler2D texture;
        uniform sampler2D texture2;
        uniform sampler2D disp;
        uniform float dispFactor;
        uniform float effectFactor;
        void main() {
            vec2 uv = vUv;
            vec4 disp = texture2D(disp, uv);
            vec2 distortedPosition = vec2(uv.x + dispFactor * (disp.r*effectFactor), uv.y);
            vec2 distortedPosition2 = vec2(uv.x - (1.0 - dispFactor) * (disp.r*effectFactor), uv.y);
            vec4 _texture = texture2D(texture, distortedPosition);
            vec4 _texture2 = texture2D(texture2, distortedPosition2);
            vec4 finalTexture = mix(_texture, _texture2, dispFactor);
            gl_FragColor = finalTexture;
        }
    </script>
    <script id="slider-textures-vertical-fs" type="x-shader/x-fragment">
        varying vec2 vUv;
        uniform sampler2D texture;
        uniform sampler2D texture2;
        uniform sampler2D disp;
        uniform float dispFactor;
        uniform float effectFactor;
        void main() {
            vec2 uv = vUv;
            vec4 disp = texture2D(disp, uv);
            vec2 distortedPosition = vec2(uv.x, uv.y - dispFactor * (disp.r*effectFactor));
            vec2 distortedPosition2 = vec2(uv.x, uv.y + (1.0 - dispFactor) * (disp.r*effectFactor));
            vec4 _texture = texture2D(texture, distortedPosition);
            vec4 _texture2 = texture2D(texture2, distortedPosition2);
            vec4 finalTexture = mix(_texture, _texture2, dispFactor);
            gl_FragColor = finalTexture;
        }
    </script>
<script src="https://endema.com.tr/wp-content/themes/endema/js/vendor.js"></script>
<script src="https://endema.com.tr/wp-content/themes/endema/js/components.js"></script>
</body>
</html>





<?php endif; ?>