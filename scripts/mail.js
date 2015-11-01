
function getEmail( strUser, strDomain)	{ return strUser + "@" + strDomain; }
function mailme(strUser, strDomain)	{ document.location.href="mailto:" + getEmail(strUser, strDomain); }
