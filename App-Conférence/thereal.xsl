<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns:php="http://php.net/xsl">
<xsl:output method="text" encoding="UTF-8"/>
	<xsl:template match="/register">
	\documentclass{article}
	\usepackage[utf8]{inputenc}
	\usepackage[french,english]{babel}
	\usepackage{pst-all} 
	\usepackage{graphicx} 

	\documentclass{minimal}
	\usepackage{hyperref}
	\usepackage{color}

	\begin{document}
	\psset{unit=2in,linewidth=5pt} 
	\rput(3,18){\includegraphics[width=8cm]{logo.png}}
	\\
	\\
	\\
	\\
	\\
	\\
	\\
	\\
	\\
	\\
	\hline
	\begin{center}
    	\section*{Certificate of Participation} 
	\end{center}\begin{Form} 
	\begin{center}
    	\textbf{This is to certify that}
	\end{center}
	\begin{center}
    	\textbf{<xsl:value-of select="participant[@id=$id]/firstname"/> }
    	\textbf{<xsl:value-of select="participant[@id=$id]/lastname"/>}
	\end{center}
	\\\\
	\begin{center}
    	\textbf{Presented a paper titled} 
	\end{center}
	\begin{center}
    	\section*{\textsc{<xsl:value-of select="participant[@id=$id]/paper/title"/>}} 
	\end{center}
	\begin{center}
    	\textbf{at the University of fly} 
	\end{center}
	\begin{center}
    	\textbf{(FSR 2019)} 
	\end{center}
	\begin{center}
    	\textbf{Participating \textcolor{red}{<xsl:value-of select="participant[@id=$id]/presentation/@date"/>}} 
	\end{center}
	 \\
	 \\
	 \\
	 \\
	 \begin{center}
    	\textbf{Signed} 
	\end{center}

	\end{Form}


	\end{document}

    </xsl:template>
</xsl:stylesheet>