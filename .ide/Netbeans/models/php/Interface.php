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
 * @package ${packageName}
 * @subpackage ${subpackageName}
 * @author ${user} <${email}>
 * @version ${version} 
 */
interface ${name} {
    //put your code here
}

