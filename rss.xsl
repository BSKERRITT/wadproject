<?xml version="1.0" ?>
<xsl:transform xmlns:xsl="http://www.w3.org/1999/XSL/Transform"	version="1.0">
	<xsl:template match="*">
		<xsl:apply-templates/>
	</xsl:template>
	<xsl:template match="text()">
		<xsl:apply-templates/>
	</xsl:template>
	<xsl:template match="/">
		<html>
			<head>
				<title>FACTS</title>
			</head>
			<body>
				<!--New Fact-->
				<p><img src="images/pic_rss.gif"></img> FEED</p>
				<p>OUR FACT DATABASE WAS LAST UPDATED ON:</p>
				<xsl:apply-templates select="//channel/title/text()"/>
				<xsl:apply-templates select="//channel/pubDate/text()"/>
				
			</body>
		</html>
	</xsl:template>
	
	<!--Fact Templates-->
	<xsl:template match="//channel/title/text()">
		<xsl:value-of select="."/><br />
	</xsl:template>
	
	<xsl:template match="//channel/pubDate/text()">
		<xsl:value-of select="."/><br />
	</xsl:template>
	
</xsl:transform>
	