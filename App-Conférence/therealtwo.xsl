<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns:php="http://php.net/xsl">
<xsl:output method="text" encoding="UTF-8"/>
	<xsl:template match="/register">
	\documentclass{article}
	\usepackage[utf8]{inputenc}


	\begin{document}

	\section*{Recu de paiement}

	\begin{tabular}
	{|p{1.7in}|p{1.5in}|} \hline 
	Payé Par \newline \newline  <xsl:value-of select="participant[@id=$id]/lastname"/> ,  <xsl:value-of select="participant[@id=$id]/firstname"/> \newline \newline   &amp;Num de TVA \newline \newline SDFGHJ456 \\ \hline 
	Montant Total \newline <xsl:value-of select="participant[@id=$id]/payement/@montant"/>  <xsl:value-of select="participant[@id=$id]/payement/@devise "/> &amp; Statut : \newline <xsl:value-of select="participant[@id=$id]/payement/@paye"/>   \\ \hline 
	Lieu et date \newline <xsl:value-of select="participant[@id=$id]/affiliation/@city"/> : <xsl:value-of select="participant[@id=$id]/presentation/@date"/> ,
	  &amp;Tompon signatur\newline \newline \newline\newline \newline  \\ \hline 
	\end{tabular}

	\end{document}

    </xsl:template>
</xsl:stylesheet>