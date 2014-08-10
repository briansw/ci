module ReadingsHelper

  def pdf_or_url(reading)
    if reading.pdf.present?
      reading.pdf.attachment_url
    else
      reading.link
    end
  end

end