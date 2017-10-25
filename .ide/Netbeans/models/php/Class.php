<?php
<#assign licenseFirst = "/* ">
<#assign licensePrefix = " * ">
<#assign licenseLast = " */">
<#include "${project.licensePath}">

<#if namespace?? && namespace?length &gt; 0>
namespace ${namespace};
</#if>

/**
 * Description of ${name}
 * @package 
 * @subpackage 
 * @author ${user} <email>
 * @version 1.0.0
 */
class ${name} {
    //put your code here
}

