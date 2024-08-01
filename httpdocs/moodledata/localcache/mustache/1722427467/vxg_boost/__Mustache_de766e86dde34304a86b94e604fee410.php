<?php

class __Mustache_de766e86dde34304a86b94e604fee410 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="goto-top-link" style="position: fixed; bottom: 20px; right: 20px;">
';
        $buffer .= $indent . '    <a class="btn btn-light" role="button" href="#" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section6a4b2fe1599a285b5e49ba74521706f7($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '       style="display: flex; align-items: center; justify-content: center; width: 40px; height: 40px; border-radius: 50%; border: 1px solid #ffffff; background-color: #f8f9fa; text-align: center; line-height: 0;">
';
        $buffer .= $indent . '        ';
        $value = $context->find('pix');
        $buffer .= $this->section9c4af6d25a64836b76fa846a931e9355($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '    <style>
';
        $buffer .= $indent . '        #goto-top-link a i {
';
        $buffer .= $indent . '            font-size: 24px; /* Adjust this value to increase or decrease the icon size */
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    </style>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<!-- Custom Footer for Moodle -->
';
        $buffer .= $indent . '<footer id="page-footer" class="py-3 text-light" style="border-top-right-radius: 30px;">
';
        $buffer .= $indent . '    <div class="container" style="max-width: 1200px; margin: 0 auto;">
';
        $buffer .= $indent . '        <div class="row" style="display: flex; flex-wrap: wrap;">
';
        $buffer .= $indent . '            <!-- Logo Section -->
';
        $buffer .= $indent . '            <div class="col-md-3" style="padding: 20px;">
';
        $buffer .= $indent . '                <a href="https://prolearn.ng/" aria-label="ProLearn Home">
';
        $buffer .= $indent . '                    <img src="/theme/vxg_boost/images/prolearn_logo.png" alt="ProLearn Logo" style="max-width: 150px; height: auto;">
';
        $buffer .= $indent . '                </a>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <!-- User Information Link -->
';
        $buffer .= $indent . '            <div class="col-md-4" style="padding: 20px;">
';
        $buffer .= $indent . '                <h4>User Information</h4>
';
        $buffer .= $indent . '                <!-- Standard Moodle Footer Elements -->
';
        $buffer .= $indent . '                <div id="course-footer">';
        $value = $this->resolveValue($context->findDot('output.course_footer'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</div>
';
        $value = $context->findDot('output.page_doc_link');
        $buffer .= $this->section56ab3d2a64209dcad956040b1764b0df($context, $indent, $value);
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.login_info'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                <div class="tool_usertours-resettourcontainer"></div>
';
        $buffer .= $indent . '                <nav class="nav navbar-nav d-md-none" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->sectionB2d5335613e625f97c91fba6125c780d($context, $indent, $value);
        $buffer .= '">
';
        $value = $context->findDot('output.custom_menu_flat');
        $buffer .= $this->section5135824a718254635e85e321ca7b1ba7($context, $indent, $value);
        $buffer .= $indent . '                </nav>
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                <!-- Additional Links -->
';
        $buffer .= $indent . '                <div class="mt-3">
';
        $buffer .= $indent . '                    <a href="https://prolearn.ng/mod/page/view.php?id=105" style="color: #ffffff; text-decoration: none;">About Us</a><br>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <!-- Social Media Links -->
';
        $buffer .= $indent . '            <div class="col-md-4" style="padding: 20px;">
';
        $buffer .= $indent . '                <h4>Follow Us</h4>
';
        $buffer .= $indent . '                <style>
';
        $buffer .= $indent . '                    .social-icons {
';
        $buffer .= $indent . '                        display: flex;
';
        $buffer .= $indent . '                        gap: 10px; /* Space between icons */
';
        $buffer .= $indent . '                    }
';
        $buffer .= $indent . '                    .social-icons a {
';
        $buffer .= $indent . '                        text-decoration: none; /* Remove underline */
';
        $buffer .= $indent . '                    }
';
        $buffer .= $indent . '                    .social-icons i {
';
        $buffer .= $indent . '                        font-size: 30px; /* Icon size */
';
        $buffer .= $indent . '                        color: #ffffff; /* Icon color */
';
        $buffer .= $indent . '                    }
';
        $buffer .= $indent . '                </style>
';
        $buffer .= $indent . '                <div class="social-icons">
';
        $buffer .= $indent . '                    <a href="https://instagram.com/" target="_blank" aria-label="Instagram">
';
        $buffer .= $indent . '                        <i class="fa-brands fa-instagram"></i>
';
        $buffer .= $indent . '                    </a>
';
        $buffer .= $indent . '                    <a href="https://linkedin.com/" target="_blank" aria-label="LinkedIn">
';
        $buffer .= $indent . '                        <i class="fa-brands fa-linkedin"></i>
';
        $buffer .= $indent . '                    </a>
';
        $buffer .= $indent . '                    <a href="https://twitter.com/" target="_blank" aria-label="Twitter">
';
        $buffer .= $indent . '                        <i class="fa-brands fa-twitter"></i>
';
        $buffer .= $indent . '                    </a>
';
        $buffer .= $indent . '                    <a href="mailto:education@prolearn.ng" aria-label="Email">
';
        $buffer .= $indent . '                        <i class="fa-solid fa-envelope"></i>
';
        $buffer .= $indent . '                    </a>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <!-- Copyright Statement -->
';
        $buffer .= $indent . '        <div class="row mt-3">
';
        $buffer .= $indent . '            <div class="col-md-12 text-center">
';
        $buffer .= $indent . '                <p>&copy; 2024 <a href="https://prolearn.ng/" style="color: #ffffff; text-decoration: none;">ProLearn</a>. All Rights Reserved.</p>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</footer>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<!-- Custom JavaScript for Smooth Scrolling -->
';
        $buffer .= $indent . '<script>
';
        $buffer .= $indent . '    document.addEventListener(\'DOMContentLoaded\', function() {
';
        $buffer .= $indent . '        var gotoTopButton = document.querySelector(\'#goto-top-link a\');
';
        $buffer .= $indent . '        if (gotoTopButton) {
';
        $buffer .= $indent . '            gotoTopButton.addEventListener(\'click\', function(event) {
';
        $buffer .= $indent . '                event.preventDefault();
';
        $buffer .= $indent . '                window.scrollTo({ top: 0, behavior: \'smooth\' });
';
        $buffer .= $indent . '            });
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    });
';
        $buffer .= $indent . '</script>';

        return $buffer;
    }

    private function section6a4b2fe1599a285b5e49ba74521706f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' totop, theme_boost ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' totop, theme_boost ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9c4af6d25a64836b76fa846a931e9355(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/up, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/up, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section56ab3d2a64209dcad956040b1764b0df(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <p class="helplink">{{{ output.page_doc_link }}}</p>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <p class="helplink">';
                $value = $this->resolveValue($context->findDot('output.page_doc_link'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB2d5335613e625f97c91fba6125c780d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'custommenu, admin';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'custommenu, admin';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5135824a718254635e85e321ca7b1ba7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <ul class="list-unstyled pt-3">
                            {{> theme_boost/custom_menu_footer }}
                        </ul>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <ul class="list-unstyled pt-3">
';
                if ($partial = $this->mustache->loadPartial('theme_boost/custom_menu_footer')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                            ');
                }
                $buffer .= $indent . '                        </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
