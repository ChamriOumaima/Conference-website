<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns:php="http://php.net/xsl">
<xsl:output method="text" encoding="UTF-8"/>
	<xsl:template match="/register">
	\documentclass{article}
\usepackage[utf8]{inputenc}
\usepackage{graphicx}
\begin{document}
\begin{figure}[!h]
  
\centering
    \includegraphics[width=50mm]{Qrcode_wikipedia_fr_v2clean.png}
    \label{fig:label}
\end{figure}
\\  
\centering
\\
\\
\\
\\{\LARGE Badge de participation a la conference}
\\
\\
\\
\centering
{\LARGE Participant Last name :
    	\textbf{<xsl:value-of select="participant[@id=$id]/lastname"/> }
} \\
\\
{\LARGE Participant Name : \textbf{<xsl:value-of select="participant[@id=$id]/firstname"/>}} \\
\\
{\LARGE  Date de participation   : \textbf{<xsl:value-of select="participant[@id=$id]/presentation/@date"/>}} \\
\\

\centering
    \includegraphics[width=50mm]{Capture.PNG}
    \label{fig:label}
\end{figure}

\end{document}

    </xsl:template>
</xsl:stylesheet>