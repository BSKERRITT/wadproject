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
				<!--Random-->
				<p>Random Fact:</p>
				<xsl:apply-templates select="//catalog/genre[4]/facts/fact"/>
				
				
				
			</body>
		</html>
	</xsl:template>
	
	<!--Fact Templates-->
	<xsl:template match="facts[last()]/fact/text()">
		<xsl:value-of select="."/><br />
	</xsl:template>
	
</xsl:transform>